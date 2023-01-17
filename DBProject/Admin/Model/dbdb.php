<?php
global $conn;
$conn = oci_connect('project', 'project', 'localhost/XE');
function Registration($name, $email, $mobile, $date_of_birth, $nid, $password)
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql =
        'begin pack_admin_add_update.proc_add_admin(:name, :email, :mobile , :nid , :password ); end;';
    $stmt = oci_parse($conn, $sql);
    oci_bind_by_name($stmt, ':name', $name, 32);
    oci_bind_by_name($stmt, ':email', $email, 32);
    oci_bind_by_name($stmt, ':mobile', $mobile, 32);
    oci_bind_by_name($stmt, ':nid', $nid, 32);
    oci_bind_by_name($stmt, ':password', $password, 32);
    return oci_execute($stmt);
}
function login($email, $password)
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse(
        $conn,
        "select * from adminn where email='$email' and PASSWORD='$password'"
    );
    $res = oci_execute($sql);
    $row = oci_fetch_assoc($sql);
    return $row;
}
function admin_view()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse(
        $conn,
        'select * from admin_detail_view order by adminn_id'
    );
    $res = oci_execute($sql);
    return $sql;
}
function emp_view()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse($conn, 'select * from emp_detail_view');
    $res = oci_execute($sql);
    return $sql;
}
function tourist_view()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse($conn, 'select * from tourist_detail_view');
    $res = oci_execute($sql);
    return $sql;
}
function sign_log()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse($conn, 'select * from admin_reg_log');
    $res = oci_execute($sql);
    return $sql;
}
function top_grade_emp()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse($conn, 'select * from Hpaid_emp_view ');
    $res = oci_execute($sql);
    return $sql;
}
function admin_info_update()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse($conn, 'select name from adminn');
    $res = oci_execute($sql);
    return $sql;
}
function emp_search_1($e_id)
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse($conn, "select * from emp_detail_view where e_id= $e_id ");
    $res = oci_execute($sql);
    return $sql;
}
function tourist_search_1()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse(
        $conn,
        'select * from tourist_detail_view where t_id = (select max(t_id) from tourist_detail_view)'
    );
    $res = oci_execute($sql);

    return $sql;
}
function tourist_search_2()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse(
        $conn,
        'select * from tourist_detail_view where t_id = (select min(t_id) from tourist_detail_view)'
    );
    $res = oci_execute($sql);
    return $sql;
}
function plsql_test()
{
}
function admin_self_search($email)
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse($conn, "select * from adminn where password = '$email'");
    $res = oci_execute($sql);
    return $sql;
}
function bkash_user_tourist()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse(
        $conn,
        "select t_id, name, email, age, gender, nid from tourist_info where t_id in (select t_id from payment where pay_type = 'bkash')"
    );
    $res = oci_execute($sql);
    return $sql;
}
function bkash_user_tourist1()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = 'begin proc_bkash_user(); end;';
    $stmt = oci_parse($conn, $sql);
    return oci_execute($stmt);
}
function highest_booked_ticket_by_tourist()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse(
        $conn,
        "select tourist_info.name, payment.quantity from tourist_info,payment where tourist_info.t_id = payment.t_id and payment.quantity in (select max(quantity) from payment)
        "
    );
    $res = oci_execute($sql);
    return $sql;
}
function PaymentStatus()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse($conn, 'select * from payment_by_user');
    $res = oci_execute($sql);
    return $sql;
}
function BookingStatus()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse($conn, 'select * from booked_by_user');
    $res = oci_execute($sql);
    return $sql;
}

function HighestPayement()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse(
        $conn,
        'select * from payment_by_user where pay_amount = (select max(pay_amount) from payment_by_user)'
    );
    $res = oci_execute($sql);
    return $sql;
}
function SalGrade()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse($conn, 'select * from salgrade order by grade');
    $res = oci_execute($sql);
    return $sql;
}
function UpdateSalGrade($grade, $salary)
{
    $conn = oci_connect('project', 'project', 'localhost/XE');

    $sql = 'begin pack_sal_update.proc_sal_update(:grade,:salary); end;';
    $stmt = oci_parse($conn, $sql);
    oci_bind_by_name($stmt, ':grade', $grade, 32);
    oci_bind_by_name($stmt, ':salary', $salary, 32);
    return oci_execute($stmt);
}
function InsertSalGrade($grade, $salary)
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse($conn, "insert into salgrade values($grade, $salary)");
    $res = oci_execute($sql);
    return $sql;
}
function DeleteSalGrade($grade)
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse($conn, "delete from salgrade where grade = $grade");
    $res = oci_execute($sql);
    return $sql;
}
function UpdateSalDetail($e_id, $grade)
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = 'begin emp_grade.emp_grade_up(:e_id,:grade); end;';
    $stmt = oci_parse($conn, $sql);
    oci_bind_by_name($stmt, ':e_id', $e_id, 32);
    oci_bind_by_name($stmt, ':grade', $grade, 32);
    return oci_execute($stmt);
}
function InsertSalDetail($e_id, $grade)
{
    $conn = oci_connect('project', 'project', 'localhost/XE');

    $sql = 'begin emp_grade.emp_grade_insert(:e_id,:grade); end;';
    $stmt = oci_parse($conn, $sql);
    oci_bind_by_name($stmt, ':e_id', $e_id, 32);
    oci_bind_by_name($stmt, ':grade', $grade, 32);
    return oci_execute($stmt);
}
function DeleteSalDetail($e_id)
{
    $conn = oci_connect('project', 'project', 'localhost/XE');

    $sql = 'begin emp_grade.emp_grade_delete(:e_id); end;';
    $stmt = oci_parse($conn, $sql);
    oci_bind_by_name($stmt, ':e_id', $e_id, 32);
    return oci_execute($stmt);
}
function salUpdateLog()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse(
        $conn,
        "select * from emp_sal_uplog 
    "
    );
    $res = oci_execute($sql);
    return $sql;
}
function gradeUpdateLog()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse(
        $conn,
        "select * from emp_grade_uplog 
    "
    );
    $res = oci_execute($sql);
    return $sql;
}
function sal_detail()
{
    $conn = oci_connect('project', 'project', 'localhost/XE');
    $sql = oci_parse(
        $conn,
        "select * from sal_detail order by e_id
    "
    );
    $res = oci_execute($sql);
    return $sql;
}

function AdminInfoUpdate($name, $email, $mobile, $nid, $password)
{
    $conn = oci_connect('project', 'project', 'localhost/XE');

    $sql =
        'begin pack_admin_add_update.proc_update_admin(:name, :email, :mobile , :nid , :password ); end;';
    $stmt = oci_parse($conn, $sql);
    oci_bind_by_name($stmt, ':name', $name, 32);
    oci_bind_by_name($stmt, ':email', $email, 32);
    oci_bind_by_name($stmt, ':mobile', $mobile, 32);
    oci_bind_by_name($stmt, ':nid', $nid, 32);
    oci_bind_by_name($stmt, ':password', $password, 32);
    return oci_execute($stmt);
}
?>