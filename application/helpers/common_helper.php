<?php

/*
    @counts
    Need this function only in PHP >= 7.2.
*/
function counts($stuff){

    if ($stuff == '' || !is_array($stuff)) {
        $stuff = array();
    }

    return count($stuff);
}

#fetch all records to display with filters

function GetAllRecord($table_name = '', $condition = array(), $is_single = false, $is_like = array(), $or_like = array(), $order_by = array(), $selected_rows = '') {
    $ci = & get_instance();
    if ($condition && count($condition))
        $ci->db->where($condition);
    if ($is_like && count($is_like)) {
        foreach ($is_like as $key => $val) {
            $cur_filter = array();
            $cur_filter = $val;
            foreach ($cur_filter as $key1 => $val1) {
                $ci->db->like($key1, $val1);
            }
        }
    }
    if ($or_like && count($or_like)) {
        foreach ($or_like as $key => $val) {
            $cur_filter = array();
            $cur_filter = $val;
            foreach ($cur_filter as $key1 => $val1) {
                $ci->db->or_like($key1, $val1);
            }
        }
    }
    if ($order_by && count($order_by)) {
        foreach ($order_by as $key => $val) {
            $cur_filter = array();
            $cur_filter = $val;
            foreach ($cur_filter as $key1 => $val1) {
                $order = $val1 ? $val1 : 'asc';
                $ci->db->order_by($key1, $order);
            }
        }
    }
    if($selected_rows != "") {
        $ci->db->select($selected_rows);
    }
    $res = $ci->db->get($table_name);
    if ($is_single)
        return $res->row_array();
    else
        return $res->result_array();
}

function GetAllRecordCount($table_name = '', $condition = array(), $is_single = false, $is_like = array(), $or_like = array(), $order_by = array(), $selected_rows = '') {
    $ci = & get_instance();
    if ($condition && count($condition))
        $ci->db->where($condition);
    if ($is_like && count($is_like)) {
        foreach ($is_like as $key => $val) {
            $cur_filter = array();
            $cur_filter = $val;
            foreach ($cur_filter as $key1 => $val1) {
                $ci->db->like($key1, $val1);
            }
        }
    }
    if ($or_like && count($or_like)) {
        foreach ($or_like as $key => $val) {
            $cur_filter = array();
            $cur_filter = $val;
            foreach ($cur_filter as $key1 => $val1) {
                $ci->db->or_like($key1, $val1);
            }
        }
    }
    if ($order_by && count($order_by)) {
        foreach ($order_by as $key => $val) {
            $cur_filter = array();
            $cur_filter = $val;
            foreach ($cur_filter as $key1 => $val1) {
                $order = $val1 ? $val1 : 'asc';
                $ci->db->order_by($key1, $order);
            }
        }
    }
    if($selected_rows != "") {
        $ci->db->select($selected_rows);
    }
    $res = $ci->db->count_all_results($table_name);
    return $res;
}

function GetAllRecordIn($table_name = '', $condition = array(), $is_single = false, $is_like = array(), $or_like = array(), $order_by = array(), $is_in = array(), $selected_rows = '') {
    $ci = & get_instance();
    if ($condition && count($condition))
        $ci->db->where($condition);
    if ($is_in && count($is_in)) {
        foreach ($is_in as $key => $val) {
            $ci->db->where_in($key, $val);
        }
    }
    if ($is_like && count($is_like)) {
        foreach ($is_like as $key => $val) {
            $cur_filter = array();
            $cur_filter = $val;
            foreach ($cur_filter as $key1 => $val1) {
                $ci->db->like($key1, $val1);
            }
        }
    }
    if ($or_like && count($or_like)) {
        foreach ($or_like as $key => $val) {
            $cur_filter = array();
            $cur_filter = $val;
            foreach ($cur_filter as $key1 => $val1) {
                $ci->db->or_like($key1, $val1);
            }
        }
    }
    if ($order_by && count($order_by)) {
        foreach ($order_by as $key => $val) {
            $cur_filter = array();
            $cur_filter = $val;
            foreach ($cur_filter as $key1 => $val1) {
                $order = $val1 ? $val1 : 'asc';
                $ci->db->order_by($key1, $order);
            }
        }
    }
    if($selected_rows != "") {
        $ci->db->select($selected_rows);
    }
    $res = $ci->db->get($table_name);
    if ($is_single)
        return $res->row_array();
    else
        return $res->result_array();
}

function GetDatabyqry($sql) {
    $ci = & get_instance();
    $res = $ci->db->query($sql);
    return $res->result_array();
}

#insert update query with filter and flag

function ManageData($table_name = '', $condition = array(), $udata = array(), $is_insert = false) {
    $resultArr = array();
    $ci = & get_instance();
    if ($condition && count($condition))
        $ci->db->where($condition);
    if ($is_insert) {
        $ci->db->insert($table_name, $udata);
        $insertid = $ci->db->insert_id();
        return $insertid;
        #return 0;
    } else {
        if($ci->db->update($table_name,$udata) == 1){
            return 1;
        }else{
            return 0;
        }

    }
}

#insert update query with filter and flag

function incrementReportData($table_name = '', $condition = array(), $value = 0, $status = 'inc') {
    $resultArr = array();
    $ci = & get_instance();
    if ($condition && count($condition))
        $ci->db->where($condition);
    if(@$status && $status == "inc")
        $ci->db->set('reportVal', 'reportVal+'.$value, FALSE);
    if(@$status && $status == "dec")
        $ci->db->set('reportVal', 'reportVal-'.$value, FALSE);
    $ci->db->update($table_name);
    return 0;
}

function incrementData($table_name = '', $condition = array(), $fields = "", $value = 0, $status = 'inc') {
    $resultArr = array();
    $ci = & get_instance();
    if ($condition && count($condition))
        $ci->db->where($condition);
    if(@$status && $status == "inc")
        $ci->db->set($fields, ''.$fields.'+'.$value.'', FALSE);
    if(@$status && $status == "dec")
        $ci->db->set($fields, ''.$fields.'-'.$value.'', FALSE);
    $ci->db->update($table_name);
    return 0;
}

#joinTable

// function JoinData($table_name = '', $condition = array(), $join_table = '', $table_id = '', $join_id = '', $is_single = false) {
//     $ci = & get_instance();
//     #$ci->db->select('first_name,last_name');
//     if ($condition && count($condition))
//         $ci->db->where($condition);
//     $ci->db->from($table_name);
//     if ($join_table)
//         $ci->db->join($join_table, "$table_name.$table_id = $join_table.$join_id");
//     $res = $ci->db->get();
//     if ($is_single)
//         return $res->row_array();
//     else
//         return $res->result_array();
// }

function JoinData($table_name = '', $condition = array(), $join_table = '', $table_id = '', $join_id = '', $type = '',$is_single = false,$order_by = array(),$selected_rows = '',$limit = '') {
    $ci = & get_instance();
    #$ci->db->select('first_name,last_name');
    
    if ($condition && count($condition))
        $ci->db->where($condition);
    $ci->db->from($table_name);
    
    if ($join_table)
        $ci->db->join($join_table, "$table_name.$table_id = $join_table.$join_id",$type);

    if ($order_by && count($order_by)) {
        foreach ($order_by as $key => $val) {
            $cur_filter = array();
            $cur_filter = $val;
            foreach ($cur_filter as $key1 => $val1) {
                $order = $val1 ? $val1 : 'asc';
                $ci->db->order_by($key1, $order);
            }
        }
    }
    if($selected_rows)
        $ci->db->select($selected_rows);

    if($limit != ""){
        $ci->db->limit($limit);
    }
    
    $res = $ci->db->get();
    if ($is_single)
        return $res->row_array();
    else
        return $res->result_array();
}
#Creating Pagination Link

function pagiationData($str, $num, $start, $segment, $perpage = 20) {

    $CI = & get_instance();
    $config['base_url'] = site_url('/') . $str;
    $config['total_rows'] = $num;
    if ($perpage) {
        $config['per_page'] = $perpage;
    } else {
        $config['per_page'] = $CI->session->userdata('per_page') ? $CI->session->userdata('per_page') : $perpage;
    }
    $config["reuse_query_string"] = TRUE;
    $config['uri_segment'] = $segment;
    $config['full_tag_open'] = '<ul class = "pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['cur_page'] = $start;
    $config['first_tag_open'] = '<li class="first ">';
    $config['first_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li class="">';
    $config['next_tag_close'] = '</li>';
    $config['num_tag_open'] = '<li class="">';
    $config['num_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="last ">';
    $config['last_tag_close'] = '</li>';
    $config['prev_tag_open'] = '<li class="">';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class=" active"><a href="javascript:;">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_links'] = 1;

    $CI->pagination->initialize($config);
    $query = $CI->db->last_query() . " LIMIT " . $start . " , " . $config['per_page'];
    //print_r($query);die;
    $res = $CI->db->query($query);
    $data['listArr'] = $res->result_array();
    $data['num'] = $res->num_rows();
    $data['Total'] = $num;
    $data['start'] = $start;
    $data['links'] = $CI->pagination->create_links();
    $ofpage = ($start + $data['num']);
    if ($num > 0) {

        $start = $start + 1;
        $data['pageinfo'] = 'Showing ' . $start . ' to ' . $ofpage . ' of ' . $data['Total'] . ' entries';

    }else{

        $data['pageinfo'] = "No Records";
    }
    return $data;
}

function GetFormError() { //return single error message after form validation
    $CI = & get_instance();
    $errorarr = $CI->form_validation->error_array();
    if (count($errorarr) === 0) {
        return FALSE;
    } else {
        foreach ($errorarr as $key => $val) {
            return $val;
        }
    }
}

function pre($str) { //Print prev screen for array
    echo '<pre>';
    print_r($str);
    echo '</pre>';
}

function last_query() { //print last executed query
    $CI = & get_instance();
    pre($CI->db->last_query());
}

function ValidImageExt() {
    $dropdown = array('gif' => 'gif',
        'jpg' => 'jpg',
        'jpeg' => 'jpeg',
        'png' => 'png',
        'bmp' => 'bmp',
    );
    return $dropdown;
}

function uploadFile($uploadFile, $filetype, $folder, $fileName = '') {
    $CI = & get_instance();
    $resultArr = array();
    $config['max_size'] = '1024000';
    if ($filetype == 'img')
        $config['allowed_types'] = 'gif|jpg|png|jpeg|png';
    if ($filetype == 'All')
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|zip|xls';
    if ($filetype == 'csv')
        $config['allowed_types'] = 'csv';
    if ($filetype == 'swf')
        $config['allowed_types'] = 'swf';
    if ($filetype == 'mp3')
        $config['allowed_types'] = 'mp3|wma|wav|.ra|.ram|.rm|.mid|.ogg';
    if ($filetype == '*')
        $config['allowed_types'] = '*';

    if (strpos($folder, 'application/views') !== FALSE)
        $config['upload_path'] = './' . $folder . '/';
    else
        $config['upload_path'] = './upload/' . $folder . '/';
    if ($fileName != "")
        $config['file_name'] = $fileName;

    if(!is_dir($config['upload_path']))
            mkdir($config['upload_path'],'0777');

    $CI->load->library('upload', $config);
    $CI->upload->initialize($config);

    if (!$CI->upload->do_upload($uploadFile)) {
        $resultArr['success'] = false;
        $resultArr['error'] = $CI->upload->display_errors();
    } else {
        $resArr = $CI->upload->data();
        $resultArr['success'] = true;

        if (strpos($folder, 'application/views') !== FALSE) {
            $resultArr['path'] = $folder . "/" . $resArr['file_name'];
        } else {
            $resultArr['path'] = "upload/" . $folder . "/" . $resArr['file_name'];
        }
    }
    return $resultArr;
}

function uploadMultiFiles($fieldName, $folder, $options = array()) {
    $CI = & get_instance();
    $CI->load->library('upload');
    $response = array();
    $files = $_FILES;
    $cpt = count($_FILES[$fieldName]['name']);
    $options['upload_path'] = "./upload/";
	if (strpos($folder, 'application/views') !== FALSE)
        $options['upload_path'] = './' . $folder . '/';
    else
        $options['upload_path'] = './upload/' . $folder . '/';
    $options['allowed_types'] = '*';
    for ($i = 0; $i < $cpt; $i++) {
        $_FILES[$fieldName]['name'] = $files[$fieldName]['name'][$i];
        $_FILES[$fieldName]['type'] = $files[$fieldName]['type'][$i];
        $_FILES[$fieldName]['tmp_name'] = $files[$fieldName]['tmp_name'][$i];
        $_FILES[$fieldName]['error'] = $files[$fieldName]['error'][$i];
        $_FILES[$fieldName]['size'] = $files[$fieldName]['size'][$i];
        $CI->upload->initialize($options);
        $fileName = $files[$fieldName]['name'][$i];
//upload the image
        if (!$CI->upload->do_upload($fieldName)) {
            $response['error'][] = $CI->upload->display_errors();
        } else {
            $resArr = $CI->upload->data();
            //$response[] = "upload/" . $resArr['file_name'];
			if (strpos($folder, 'application/views') !== FALSE) {
				$response[] = $folder . "/" . $resArr['file_name'];
			} else {
				$response[] = "upload/" . $folder . "/" . $resArr['file_name'];
			}
        }
    }

    return $response;
}

function SetMsg($var, $msg) {
    $ci = & get_instance();
    $ci->session->set_flashdata($var, $msg);
}

function GetMsg($var) {
    $ci = & get_instance();
    return $ci->session->flashdata($var);
}

function getConfigVal($keyParam) {
    $ci = & get_instance();
    $sql = "select configVal from ".SITECONFIG." where configKey='$keyParam'";
    $configVal = $ci->db->query($sql)->row_array($sql);
    return isset($configVal['configVal']) ? $configVal['configVal'] : "";
}

function getReportVal($keyParam) {
    $ci = & get_instance();
    $sql = "select reportVal from ".PAYMENT_REPORT." where reportKey='$keyParam'";
    $reportVal = $ci->db->query($sql)->row_array($sql);
    return isset($reportVal['reportVal']) ? $reportVal['reportVal'] : "";
}

function loginRegSectionMsg($msgId = "") {
    $msgArr = array(
        "insertData" => "Data Inserted Successfully.",        
        "updateData" => "Data Updated Successfully.",                
    );
    if ($msgId !== "")
        return $msgArr[$msgId];
    else
        return $msgArr;
}

/*
  ++++++++++++++++++++++++++++++++++++++++++++++
  Mail send shortcut function.
  Pass parameters according described in functions
  parameters.
  ++++++++++++++++++++++++++++++++++++++++++++++
 */

function sendMail($toEmail, $subject='', $mail_body='', $from_email = '', $from_name = '', $file_path = '') {
    $C = & get_instance();

    $from_email = "support@cipherhex.com";
    $from_name  = "Game Campaign Portal";

    $C->load->library('email');
    $config['mailtype'] = 'html';
    $config['protocol'] = 'mail';
    $config['mailpath'] = '/usr/sbin/sendmail';
    $config['charset'] = 'utf-8';
    $config['wordwrap'] = TRUE;

    $C->email->initialize($config);
    $C->email->from($from_email, $from_name);
    $C->email->to($toEmail);
    $C->email->subject($subject);
    $C->email->message($mail_body);
    if($C->email->send()){
        return 0;
    } else {
        return 1;
    }
    //echo $C->email->print_debugger();
#	unset($C);
}

/*
  ++++++++++++++++++++++++++++++++++++++++++++++
  Sending Mail from local
  Pass parameters according described in functions
  parameters.
  ++++++++++++++++++++++++++++++++++++++++++++++
 */

function sendLocalMail($emailId, $subject, $mail_body, $senderId = "", $rpl_to_email = '') {
    if ($rpl_to_email == '')
        $rpl_to_email = getConfigVal("emailSender");
    if ($senderId == '')
        $senderId = getConfigVal("emailSender");

    $C = & get_instance();
    $emailData['smtpHost'] = getConfigVal("smtpHost");
    $emailData['smtpPort'] = getConfigVal("smtpPort");
    $emailData['smtpUname'] = getConfigVal("smtpUname");
    $emailData['smtpPass'] = getConfigVal("smtpPass");

    $C->load->helper('phpmailer');
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->IsHTML(true); // send as HTML	
    $mail->SMTPAuth = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "ssl";
//    $mail->SMTPSecure = "tls";
    if (!empty($emailData)) {
        $mail->Host = $emailData['smtpHost'];
        $mail->Port = $emailData['smtpPort'];
        $mail->Username = $emailData['smtpUname'];
        $mail->Password = $emailData['smtpPass'];
    } else {
        $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        //$mail->Port       = 465; 
        $mail->Port = 587;
        $mail->Username = "devobrijesh@gmail.com";
        $mail->Password = "devo@123";
    }
    $mail->AddReplyTo($rpl_to_email, "");
    $mail->SetFrom($senderId, '');
    $mail->Subject = $subject;
    $mail->Body = $mail_body;
    $mail->AltBody = "Plain text message";
    $emails = explode(",", $emailId);

    foreach ($emails as $email)
        $mail->AddAddress($email);
    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        return false;
    } else
        return true;
#		echo 'message send successfuuly';
}

function cleanString($string) {
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}

function reformatPrice($num, $precision = 1) {
    if ($num >= 1000 && $num < 1000000) {
        $n_format = number_format($num / 1000, $precision) . 'K';
    } else if ($num >= 1000000 && $num < 1000000000) {
        $n_format = number_format($num / 1000000, $precision) . 'M';
    } else if ($num >= 1000000000) {
        $n_format = number_format($num / 1000000000, $precision) . 'B';
    } else {
        $n_format = $num;
    }
    return $n_format;
}

function is_logged() {
    $ci = & get_instance();
    if ($ci->session->userdata('adminId') > 0)
        return true;
    else
        return false;
}

function GetCurUserInfo() {
    $ci = & get_instance();
    $curUserId = $ci->session->userdata('adminId');
    $ci->db->where('adminId', $curUserId);
    return $ci->db->get(ADMINMASTER)->row_array();
}

function getResizeImagePath($imagePath, $height = 125, $width = 125) {
    if (strtolower($_SERVER['HTTP_HOST']) == 'localhost') {
        return $imagePath;
    } else {
        return site_url("imagePath?img=" . $imagePath . "&h=$height" . "w=$width");
    }
}

function getReceivedProjectAmount($projectId) {
    $record = GetAllRecord(PROJECT_PAYMENT, array("projectId" => $projectId), "", "", "", array());
    $amount = 0;
    for($i = 0; $i < count($record); $i++) {
        $amount += $record[$i]["payment"];
    }
    return $amount;
}

function displayErrorMsg($errorMsg=""){
    return '<div class="alert alert-danger alert-dismissible fade in" role="alert"><strong>Error</strong> '.$errorMsg.'</div>';
}

function displaySucMsg($sucMsg=""){
    return '<div class="alert alert-success alert-dismissible fade in" role="alert"><strong>Success</strong> '.$sucMsg.'</div>';
}

function checkLoginAccess() {
    $ci = & get_instance();
    if ($ci->session->userdata('adminId') > 0)
        return true;
    else
        redirect("login");
}

function usMoneyFormat($value) {
    return number_format($value, 2);
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function sendMessage($params) {
    $mobile = $params["mobile"];
    $message = urlencode($params["message"]);
    $output = file_get_contents("http://login.arihantsms.com/vendorsms/pushsms.aspx?user=cipherhex&password=UBtNiZlY45z3Md00qe&msisdn=".$mobile."&sid=CIPHHX&msg=".$message."&fl=0&gwid=2");
}

/**

 * Returns an encrypted & utf8-encoded

 */

function encrypt($pure_string) {
    
    return bin2hex(openssl_encrypt($pure_string, 'AES-128-CBC', ENCRYPT_KEY));

}

/**

 * Returns decrypted original string

 */

function decrypt($encrypted_string) {
    
    return openssl_decrypt(hex2bin($encrypted_string), 'AES-128-CBC', ENCRYPT_KEY);
}


function imageResize($imgPath = "",$width=50,$height=50){

    $ci = & get_instance();

    if ($imgPath != "" ) {

        $strReplace = str_replace(base_url(),'',$imgPath); // get image path without base_url

        $explode = explode('/',$strReplace); 
        $imageNameWithExt = end($explode); // image name with extension
        $explodeExt = explode('.',$imageNameWithExt);  // expload image name with extension
        $imgName = $explodeExt[0]; // image name
        $ext = $explodeExt[1]; //extension
        $imageFolderPath = str_replace($imageNameWithExt,"",$strReplace);   // imagepath without image name 

        $source_image = FCPATH.$imageFolderPath.$imgName.'.'.$ext;  // real path 
        $new_image = FCPATH.$imageFolderPath.$imgName.'_new.'.$ext;  // real path 
        
        // Configuration
        $config['image_library'] = 'gd2';
        $config['source_image']  = $source_image;
        $config['new_image']     = $new_image;
        $config['create_thumb']  = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = $width;
        $config['height'] = $height;

        // Load the Library
        $ci->load->library('image_lib', $config);

        // resize image
        $ci->image_lib->resize();

        $file_info = pathinfo($config['new_image']);

        // handle if there is any problem
        if ( ! $ci->image_lib->resize()){
            return "err";
        }else{
            return $imageFolderPath.$file_info['filename'].'_thumb.'.$file_info['extension'];
        }

    }else{
        return "err";
    }

    
}


//get user type if multiple login is there

function getAdminType() {

    $ci = & get_instance();
    $adminType = $ci->session->userdata('adminType');
    return $adminType;   
}


//get admin type id if multiple login is there

function getAdminTypeId() {

    $ci = & get_instance();
    $adminTypeId = $ci->session->userdata('adminId');
    return $adminTypeId;   
}


function guaranteeShuffle($arr) {
    $move = $arr;
    $shuffleArr = $move;
    shuffle($shuffleArr);
    if(compareArray($arr, $shuffleArr) == 0 && count($arr) > 1) {
        return guaranteeShuffle($arr);
    } else {
        return $shuffleArr;
    }
}


function gamingShuffleFinal($arr, $winIndex) {
    $sequenceArr = array(
        1 => array(0,1,2),
        2 => array(3,4,5),
        3 => array(6,7,8),
        4 => array(0,3,6),
        5 => array(1,4,7),
        6 => array(2,5,8),
        7 => array(0,4,8),
        8 => array(2,4,6)
    );
    $winArr = $sequenceArr[$winIndex];
    $winSequence = array();

    for($i = 0; $i < count($winArr); $i++) {
       $winSequence[$i] = $arr[$winArr[$i]];
    }

    // Deciding changeable element ====================
    $targetWinChangeable = null;
    //pre($winArr);
    if(count(array_diff($winArr, [0,1,2])) == 0){
        $targetWinChangeable = 2; 
    } else if(count(array_diff($winArr, [6,7,8])) == 0 || count(array_diff($winArr, [3,4,5])) == 0){
        $targetWinChangeable = 0;
    }else{
        $targetWinChangeable = 1;
    }


    $dividing = array();
    $subDivider = array();
    //pre($winSequence);
    for($i = 0; $i < count($arr); $i++){
        // check if arr[i] NOT exist 
        if(in_array($arr[$i], $winSequence) == 0 || $arr[$i] == $winSequence[$targetWinChangeable]){
            $subDivider[] = $arr[$i];
        } else {
            /*echo "else arr i >> ".$arr[$i];*/
            if(count($subDivider) > 0) {
                $dividing[] = $subDivider;
            }
            $dividing[] = array($arr[$i]);
            $subDivider = array();
        }
    }
    if(count($subDivider) > 0){
        $dividing[] = $subDivider;
    }
    //pre($dividing);
    $finalArr = shufflingDividerArray($dividing, $arr, $winSequence, $targetWinChangeable);
    return $finalArr;
    /*pre($finalArr);*/
    
}  

function shufflingDividerArray($dividing, $arr, $winSequence, $targetWinChangeable){

    for($i = 0; $i < count($dividing); $i++) {
        $dividing[$i] = guaranteeShuffle($dividing[$i]);
    }
    
    /*pre($dividing);*/
    $finalArr = array();
    for($i = 0; $i < count($dividing); $i++) {
        /*pre($dividing[$i]);*/
        $finalArr = array_merge($finalArr, $dividing[$i]);
    }
    // echo 'before check';
    // pre($finalArr);
    if (array_search($winSequence[$targetWinChangeable], $arr) == array_search($winSequence[$targetWinChangeable], $finalArr)) {
        return shufflingDividerArray($dividing, $arr, $winSequence, $targetWinChangeable);
    }else{
        return $finalArr;
    }
    

}

function compareArray($fstArr,$secArr){

    $diff = 0;

    for($i = 0; $i < count($fstArr); $i++){
      if($fstArr[$i] != $secArr[$i]){
          $diff = 1;
          break;
      }
    }
    return $diff;
}


/*
    @getListId
    - List Id is required to send email in eMailPlatform (third_party)
    - ListId is already defined for every country in eMailPaltform

    Velkomstgaven.dk = Denmark
    Gratispresent.se = Sweden
    ?? = Finland
    Velkomstgaven.com = Norway
    ?? = UK
    ?? = Germany
    ?? = Canada

*/

function getListId($country){

    if ($country != "") {
            
        $countryArr = array(
            'DK' => 15434,
            'SE' => 15438,
            'FI' => '',
            'NO' => 15442,
            'UK' => '',
            'DE' => '',
            'CA' => '',
            'NL' => '',
            'NZ' => '',
        );

        return $countryArr[strtoupper($country)];
    }else{
        return '';
    }
    
}



/*
    @getListIdForAllAweber
    - List Id is required to send email in AWeber (third_party)
    - ListId is already defined for every country in AWeber

    $aweberListId = 1 = send email to Aweber    - Karre user account in aweber
    $aweberListId = 2 = send email to AweberSplit - Karre user account in aweber
    $aweberListId = 3 = send email to Aweber (FelinaFinans) - Camilla user account in aweber
    $aweberListId = 4 = send email to Aweber (Unelmalaina) - Camilla user account in aweber
    $aweberListId = 5 = send email to Aweber (DK - FreeCasinoDeal - N - Split) - Karre user account in aweber
    $aweberListId = 6 = send email to Aweber (NO - FreeCasinoDeal - N - Split) - Karre user account in aweber
    $aweberListId = 7 = send email to Aweber (FI - FreeCasinoDeal - N - Split) - Karre user account in aweber

*/

function getListIdForAllAweber($aweberListId,$country){
    if ($country != '') {
        
        $aweberAllListArr = array(
            '1' => array('DK' => 5237847, 'SE' => 5217417, 'FI' => 5237852, 'NO' => 5217426, 'UK' => 5221106, 'DE' => '', 'CA' => '','NL' => '','NZ' => ''),
            '2' => array('DK' => 5297593, 'SE' => 5297594, 'FI' => 5297596, 'NO' => 5297595, 'UK' => '', 'DE' => '', 'CA' => '','NL' => '','NZ' => ''),
            '3' => array('DK' => '', 'SE' => '', 'FI' => '', 'NO' => 5327219, 'UK' => '', 'DE' => '', 'CA' => '','NL' => '','NZ' => ''), 
            '4' => array('DK' => '', 'SE' => '', 'FI' => 5327235, 'NO' => '', 'UK' => '', 'DE' => '', 'CA' => '','NL' => '','NZ' => ''),
            '5' => array('DK' => 5353599,'SE' => '', 'FI' => '', 'NO' => '', 'UK' => '', 'DE' => '', 'CA' => '','NL' => '','NZ' => ''),
            '6' => array('DK' => '','SE' => '', 'FI' => '', 'NO' => 5384430, 'UK' => '', 'DE' => '', 'CA' => '','NL' => '','NZ' => ''),
            '7' => array('DK' => '','SE' => '', 'FI' => 5384432, 'NO' => '', 'UK' => '', 'DE' => '', 'CA' => '','NL' => '','NZ' => ''),
            '8' => array('DK' => '','SE' => '', 'FI' => '', 'NO' => 5518966, 'UK' => '', 'DE' => '', 'CA' => '', 'NL' => '','NZ' => ''),
            '9' => array('DK' => '','SE' => '', 'FI' => '', 'NO' => 5596681, 'UK' => '', 'DE' => '', 'CA' => '', 'NL' => '','NZ' => ''),
            '10' => array('DK' => '','SE' => 5554939, 'FI' => '', 'NO' => '', 'UK' => '', 'DE' => '', 'CA' => '', 'NL' => '','NZ' => ''),
            '11' => array('DK' => '','SE' => '', 'FI' => '', 'NO' => '', 'UK' => '', 'DE' => '', 'CA' => 5630008, 'NL' => '','NZ' => ''),
            '12' => array('DK' => '','SE' => '', 'FI' => '', 'NO' => '', 'UK' => '', 'DE' => '', 'CA' => 5646243, 'NL' => '','NZ' => ''),
            '13' => array('DK' => '','SE' => '', 'FI' => '', 'NO' => '', 'UK' => '', 'DE' => '', 'CA' => '', 'NL' => '','NZ' => 5713272),
            '14' => array('DK' => '','SE' => '', 'FI' => '', 'NO' => '', 'UK' => '', 'DE' => '', 'CA' => '', 'NL' => '','NZ' => 5384430),
            '15' => array('DK' => 5689353,'SE' => '', 'FI' => '', 'NO' => '', 'UK' => '', 'DE' => '', 'CA' => '', 'NL' => '','NZ' => ''),
        );

        return $aweberAllListArr[$aweberListId][strtoupper($country)];
    }else{
        return '';
    }
}

function getEmailArr(){
    $emailArr = array('Email adresse','E-postadress','Sähköposti','E-postadresse','Email address','E-Mail-Adresse','email adresse','e-postadress','sähköposti','e-postadresse','email address','e-mail-adresse');
    return $emailArr;
}


function getMobileArr(){
    $emailArr = array('Mobilnummer','Matkapuhelin','Mobile Number','mobilnummer','matkapuhelin','mobile number');
    return $emailArr;
}

function getFirstNameArr(){
    $emailArr = array('Fornavn','Etunimi','Förnamn','Fornavn','First Name','Vorname','fornavn','etunimi','förnamn','fornavn','first name','vorname');
    return $emailArr;
}
function getBirthdateArr(){
    $birthdateArr = array('Born','Født','Född','Geboren');
    return $birthdateArr;
}

function isValidEmail($emailId = ''){
    if (filter_var($emailId, FILTER_VALIDATE_EMAIL)) {
        return 1; //Yes
    }else{
        return 0; //No
    }
}

function languageThatHasListId(){
    $language = array('DK','SE','NO');
    return $language;
}

function getTermsAndConditionsTitle($language = 'UK'){
    $arr = array(
        'DK' => 'Cookie, vilk&aring;r og privatlivspolitik',
        'SE' => 'Cookies, villkor och sekretesspolicy',
        'FI' => 'Ev&auml;ste- ja tietosuojak&auml;yt&auml;nn&ouml;t',
        'NO' => 'Cookies, vilk&aring;r og personvernregler',
        'UK' => 'Cookies, terms and Privacy Policy',
        'DE' => 'Cookies, Bedingungen und Datenschutzbestimmungen',
        'CA' => 'Cookies, terms and Privacy Policy',
        'NL' => 'Cookies, terms and Privacy Policy', 
        'NZ' => 'Cookies, terms and Privacy Policy', 
    );

    return $arr[$language];
}


function countryThasListedInDataBowlAdverzy(){
    return array('DK','FI','NO','SE');
}

function countryThasListedInEgoi(){
    return array('DK','NO','SE');
}


function getLastNameArr(){
    $lastNameArr = array('Sukunimi','Efternamn','Efternavn','Etternavn','Last Name','Nachname','sukunimi','efternamn','efternavn','etternavn','last name','nachname');
    return $lastNameArr;
}


function getEighteenPlusTerms($language,$randomStr,$eighteenPlusFontColor = '#000'){

    $eighteenPlus = array(

        'DK' => "<p style = 'color:".$eighteenPlusFontColor.";text-shadow: 0px 1px 1px black;    font-size: 12px;'>18+ | <a style='color:#82afd8' href = '".base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html')."' target = '_self' > REGLER & VILKÅR GÆLDER </a>  | SPIL ANSVARSFULDT | <a style='color:#82afd8' href = 'https://ludomani.dk' target = '_blank' > www.ludomani.dk </a></p>",
        'SE' => "<p style = 'color:".$eighteenPlusFontColor.";text-shadow: 0px 1px 1px black;    font-size: 12px;'>18+ | <a style='color:#82afd8' href = '".base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html')."' target = '_self' ><span style = 'color:#3074b1;'> REGLER & VILLKOR GÄLLER </a>  | SPELA ANSVARSFULLT | <a style='color:#82afd8' href = 'https://www.spelpaus.se/' target = '_blank' > www.spelpaus.se </a></p>",
        'NO' => "<p style = 'color:".$eighteenPlusFontColor.";text-shadow: 0px 1px 1px black;    font-size: 12px;'>18+ | <a style='color:#82afd8' href = '".base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html')."' target = '_self' >REGLER & VILKÅR GJELDER </a>  | SPILL ANSVARLIG | <a style='color:#82afd8' href = 'https://hjelpelinjen.no/' target = '_blank' > www.hjelpelinjen.no </a></p>",
        'UK' => "<p style = 'color:".$eighteenPlusFontColor.";text-shadow: 0px 1px 1px black;    font-size: 12px;'>18+ | <a style='color:#82afd8' href = '".base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html')."' target = '_self' >TERMS & CONDITIONS </a>  | PLAY RESPONSIBLY | <a style='color:#82afd8' href = 'http://www.gamcare.org/' target = '_blank' > www.gamcare.org </a></p>",
        'CA' => "<p style = 'color:".$eighteenPlusFontColor.";text-shadow: 0px 1px 1px black;    font-size: 12px;'>18+ | <a style='color:#82afd8' href = '".base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html')."' target = '_self' >TERMS & CONDITIONS </a>  | PLAY RESPONSIBLY | <a style='color:#82afd8' href = 'http://www.gamcare.org/' target = '_blank' > www.gamcare.org </a></p>",
        'DE' => "<p style = 'color:".$eighteenPlusFontColor.";text-shadow: 0px 1px 1px black;    font-size: 12px;'>18+ | <a style='color:#82afd8' href = '".base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html')."' target = '_self' > Nutzungsbedingungen </a>  | Spiele verantwortungsvol | <a style='color:#82afd8' href = 'https://www.spielen-mit-verantwortung.de/' target = '_blank' > www.spielen-mit-verantwortung.de </a></p>",
        'FI' => "",
        'NL' => "<p style = 'color:".$eighteenPlusFontColor.";text-shadow: 0px 1px 1px black;    font-size: 12px;'>18+ | <a style='color:#82afd8' href = '".base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html')."' target = '_self' >TERMS & CONDITIONS </a>  | PLAY RESPONSIBLY | <a style='color:#82afd8' href = 'http://www.gamcare.org/' target = '_blank' > www.gamcare.org </a></p>",
        'NZ' => "<p style = 'color:".$eighteenPlusFontColor.";text-shadow: 0px 1px 1px black;    font-size: 12px;'>18+ | <a style='color:#82afd8' href = '".base_url('upload/terms_and_conditions/'.$language.'_TermsAndConditions_'.$randomStr.'.html')."' target = '_self' >TERMS & CONDITIONS </a>  | PLAY RESPONSIBLY | <a style='color:#82afd8' href = 'http://www.gamcare.org/' target = '_blank' > www.gamcare.org </a></p>",
    );
    
    return $eighteenPlus[$language];
}

function IsValidMobileNumber($telephoneNumber, $defaultCountry,$isLiveApiOn)
{
    if($defaultCountry == "NL" && $isLiveApiOn == 1){
        $options = array(
            "Option" => array(
            array(
                "Name" => "UseMobileValidation",
                "Value" => "false"
            ),
            array(
                "Name" => "UseLineValidation",
                "Value" => "false"
            ),
            array(
                "Name" => "RequiredCountry",
                "Value" => ""
            ),
            array(
                "Name" => "AllowedPrefixes",
                "Value" => ""
            ),
            array(
                "Name" => "BarredPrefixes",
                "Value" => ""
            ),
            array(
                "Name" => "UseUnavailableStatus",
                "Value" => "true"
            ),
            array(
                "Name" => "UseAmbiguousStatus",
                "Value" => "true"
            ),
            array(
                "Name" => "TreatUnavailableMobileAsInvalid",
                "Value" => "false"
            ),
            array(
                "Name" => "ExcludeUnlikelyNumbers",
                "Value" => "false"
            )
            )
        );
        $params = array(
            "username" => "Kaare@cmenetwork.dk",
            "password" => "GRfmACn2+F",            
            "telephoneNumber" => $telephoneNumber,
            "defaultCountry" => $defaultCountry,
            "options" => $options
        );
        $client = new SoapClient("https://webservices.data-8.co.uk/InternationalTelephoneValidation.asmx?WSDL");
        $result = $client->IsValid($params);

        if ($result->IsValidResult->Status->Success == 0)
        {
            return array(
                'status' => 0,
                'message' => $result->IsValidResult->Status->ErrorMessage
            );
        }
        else if ($result->IsValidResult->Status->Success == 1 )
        {
            
            if($result->IsValidResult->Result->ValidationResult == "Valid"){
                return array(
                    'status' => 1,
                    'message' => "Mobile number is valid"
                );
            }else{
                return array(
                    'status' => 0,
                    'message' => "Mobile number is invalid"
                );
            }
            
        }
    }else{
        return array(
                'status' => 1,
                'message' => ""
            );
    }    
}

/*
name: getLiveurlResponse()
return : response
author: DAB
*/
function getLiveurlResponse($liveurl, $userId,$transactionId=null) {
    // get user detail
    $condition = array('userId' => $userId);
    $order_by = array('userId' => 'Desc');
    $is_single = true;
    $getUser = GetAllRecord(USER,$condition,$is_single,array(),array(),array($order_by),'campaignId,ipAddress,other,emailId');

    // get campign detail
    $condition = array('campaignId' => $getUser['campaignId']);
    $order_by = array('campaignId' => 'Desc');
    $is_single = true;
    $getCampaign = GetAllRecord(CAMPAIGN,$condition,$is_single,array(),array(),array($order_by),'campaignUrl,campaignBackUrl,isRedirectPage,registerRedirectUrl');

    $userInfoTextVal = json_decode($getUser['other'],true);   
	$parameters = \json_decode($liveurl['parameters'],true);
	try {
		require_once(FCPATH.'vendor/autoload.php');
		$endpoint = $liveurl['url'];       
		$data = array();
        $data['list_id'] = $liveurl['list_id'];
        $data['marketing_consent'] = 0;
        $data['transaction_id'] = $transactionId;

        // if($getCampaign['isRedirectPage'] == 1) {
        //     $data['transaction_id'] = $getCampaign['registerRedirectUrl'];
        // }
		foreach($parameters as $key => $parameter) {
            if($parameter == 'signup_url') {
                $inputValue = $getCampaign['campaignUrl'] . $getCampaign['campaignBackUrl'];
            } else if($parameter == 'ip_address') {
                $inputValue = $getUser['ipAddress'];
            } else if($parameter == 'email_address') {
                $inputValue = $getUser['emailId'];
            } else {
                $inputValue = $userInfoTextVal[array_search($key, array_column($userInfoTextVal, 'name'))]['value'];
            } 
			$data[$parameter] = $inputValue;
		}
        //  Log of guzzle request for liveurl
        $logPath    = FCPATH . "log/liveurl_request/";
        $fileName   = date("Y-m-d").".txt"; 
        $logFile    = fopen($logPath.$fileName,"a");
        $logData    =  json_encode($data) . "\ntimestamp:". time()."\n--------------------\n";
        fwrite($logFile,$logData);
        fclose($logFile);

		// Create a Guzzle client
		$client = new GuzzleHttp\Client();
		$body = $client->request('GET',$endpoint, [
			'query' => $data       
		]);
		
		$responseBody = \json_decode($body->getBody(true),true);
	} catch (\Throwable $th) {
		$responseBody = $th->getMessage();
	} 
	return $responseBody; 
}

function getMarketingPlatformResponseID($providerId){
    $provider = array(
        "133" => "16",  // mp_se_gratispresent
        "134" => "17",  // mp_no_velkomstgaven
        "135" => "18",  // mp_dk_velkomstgaven
        "136" => "19",  // mp_fi_unelmalaina
        "137" => "20",  // mp_freecasinodeal_ca
        "138" => "21",  // mp_freecasinodeal_fi
        "139" => "22",  // mp_freecasinodeal_no
        "140" => "23",  // mp_freecasinodeal_no
    );
    return $provider[$providerId];
}

function getMailjetResponseID($providerId){
    $provider = array(
        "119" => "24",  // mailjet_velkomstgaven_dk
        "120" => "25",  // mailjet_gratispresent_SE
        "127" => "26",  // mailjet_velkomstgaven_nor
        "190" => "73",  // mailjet_signesmail_dk
        "191" => "74",  // mailjet_signesmail2_no 
        "192" => "75",  // mailjet_produkttest_se 
        "210" => "93",  // mailjet_dagenspresent_se
        "211" => "94",  // mailjet_velkomstgavenvip_dk
        "212" => "95"   // mailjet_velkomstgavenvip_no
    );
    return $provider[$providerId];
}

function getActiveCampaignResponseID($providerId){
    $provider = array(
        "147" => "27",  // ac_velkomstgaven_no
        "163" => "34",  // ac_gratispresent_se
        "164" => "35",  // ac_frejasmail_se
        "165" => "36",  // ac_unelmalaina_fi
        "166" => "37",  // ac_signesmail_nor
        "167" => "38",  // ac_katariinasmail_fi
        "168" => "39",  // ac_velkomstgaven_dk
        "169" => "40",  // ac_signesmail_dk
        "193" => "76",  // ac_velkomstgaven1_no
        "198" => "81",  // ac_gratisprodukttester_com_no 
        "199" => "82",  // ac_dagenspresent_se
        "213" => "96",  // ac_gratispresent1_com
    );
    return $provider[$providerId];
}

function getOntraportResponseID($providerId){
    $provider = array(
        "141" => "28",  // ontraport_gratispresentmail_se
        "142" => "29",  // ontraport_freecasinodeal1_no
        "143" => "30",  // ontraport_freecasinodeal1_fi
        "144" => "31",  // ontraport_velkomstgavenmail_dk
        "145" => "32",  // ontraport_freecasinodeal1_ca
        "146" => "33",  // ontraport_freecasinodeal1_nz
        "194" => "77",  // ontraport_velkomstgaven_dk
        "195" => "78",  // ontraport_velkomstgaven_com
        "196" => "79",  // ontraport_gratispresent_se
        "197" => "80",  // ontraport_unelmalaina_fi,
        "200" => "83",  // ontraport_velkomst_dk,
        "201" => "84",  // ontraport_signe_dk,
        "202" => "85",  // ontraport_dagens_se,
        "203" => "86",  // ontraport_felina_se,
        "204" => "87",  // ontraport_venla_fi,
        "205" => "88",  // ontraport_katariina_fi,
        "206" => "89",  // ontraport_allfree_ca,
        "207" => "90",  // ontraport_abbie_ca,
        "208" => "91",  // ontraport_ashley_nz,
        "209" => "92",  // ontraport_produkt_no
    );
    return $provider[$providerId];
}

function getExpertSenderResponseID($providerId){
    $provider = array(
        "149" => "41",  // es_abbiesmail2com_ca
        "150" => "42",  // es_ashleysmail1com_nz
        "151" => "43",  // es_felinafinans_se
        "152" => "44",  // es_frejasmail2_se
        "153" => "45",  // es_katariinasmail1com_fi
        "154" => "46",  // es_signesmail1_dk
        "155" => "47",  // es_signesmail2com_no
        "170" => "48",  // es_kaare_no_freecasinodeal
        "171" => "49",  // es_kaare_fi_freecasinodeal
        "172" => "50",  // es_kaare_ca_freecasinodeal
        "173" => "51",  // es_kaare_nz_freecasinodeal
        "174" => "52",  // es_kaare_ca_getspinn
        "175" => "53",  // es_kaare_nz_getspinn
        "176" => "54",  // es_kaare_no_getspinn
        "177" => "55",  // es_kaare_gratispresentmail_se
        "178" => "56",  // es_kaare_unelmalainamail_fi
        "179" => "57",  // es_kaare_velkomstgaven_no
        "180" => "58",  // es_kaare_dk_velkomstgaven
    );
    return $provider[$providerId];
}

function getCleverReachResponseID($providerId){
    $provider = array(
        "156" => "59",  // cr_velkomstgaven_dk
        "157" => "60",  // cr_cathrinesmail_ca
        "158" => "61",  // cr_cathrinesmail_dk
        "159" => "62",  // cr_cathrinesmail_fi
        "160" => "63",  // cr_cathrinesmail_no
        "161" => "64",  // cr_cathrinesmail_nz
        "162" => "65",  // cr_cathrinesmail_se
        "185" => "66",  // cr_velkomstgaven_no
        "186" => "67",  // cr_gratispresent_se
        "187" => "68",  // cr_unelmalaina_fi
    );
    return $provider[$providerId];
}

function getOmnisendResponseID($providerId){
    $provider = array(
        "181" => "69",  // os_se_gratispresent
        "182" => "70",  // os_no_velkomstgaven
        "183" => "71",  // os_fi_unelmalaina
        "184" => "72",  // os_dk_velkomstgaven
    );
    return $provider[$providerId];
}

function getSendgridResponseID($providerId){
    $provider = array(
        "60" => "97",  // sendgrid_ca_abbiesmail
        "214" => "98",  // sendgrid_nz_ashleysmail
        "215" => "99",  // sendgrid_nz_allfreeca
        "216" => "100",  // sendgrid_ca_allfreeca
        "217" => "101",  // sendgrid_katariinasmail
        "218" => "102",  // sendgrid_velkomstgaven_no
        "219" => "103",  // sendgrid_gratispresent_se
        "220" => "104",  // sendgrid_signesmail_no
        "221" => "105",  // sendgrid_dagenspresent_se
    );
    return $provider[$providerId];
}

function sendLeadInIntegromat($insertedId,$firstname,$emailId,$country){
    try{        

        $integromatUserData = [
            'firstname' => $firstname,
            'email' => $emailId,
            'country' => $country,
            'timestamp'  => strtotime(date('Y-m-d H:i:s'))
        ];
        // Create a Guzzle client
        $client = new GuzzleHttp\Client();
        $subscriberUrl = "https://hook.integromat.com/7r8ow5ga0kix6mm388la3r2qjzeh3jk9";
        $body = $client->post($subscriberUrl, [
            'form_params' => $integromatUserData, 
        ]); 
        $response =  $body->getBody();

        $is_insert = false;
        $condition = array('userId' => $insertedId);
        $updateArr = array('isSendIntegromat' => 1, 'integromat_date' => date('Y-m-d H:i'));

        ManageData(USER,$condition,$updateArr,$is_insert);
    } catch(\GuzzleHttp\Exception\ClientException $e) {
        return json_encode(array("result" => "error","error" => array("msg" => "Bad Request")));
    }
}