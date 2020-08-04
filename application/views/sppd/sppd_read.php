 
<div class='row'>
    <div class='col-sm-12'>
      <?= $this->session->userdata('message') ?>
      <div class='white-box'>
         <h3 class='box-title m-b-0'><?= ucfirst($judul) ?></h3> 
   <div class='table-responsive'>  
        
        <table class="table">
	    <tr><td>Letter Code</td><td><?php echo $letter_code; ?></td></tr>
	    <tr><td>Letter Subject</td><td><?php echo $letter_subject; ?></td></tr>
	    <tr><td>Letter About</td><td><?php echo $letter_about; ?></td></tr>
	    <tr><td>Letter From</td><td><?php echo $letter_from; ?></td></tr>
	    <tr><td>Letter Content</td><td><?php echo $letter_content; ?></td></tr>
	    <tr><td>Letter Date</td><td><?php echo $letter_date; ?></td></tr>
	    <tr><td>Code</td><td><?php echo $code; ?></td></tr>
	    <tr><td>Date</td><td><?php echo $date; ?></td></tr>
	    <tr><td>Nip Pejabat</td><td><?php echo $nip_pejabat; ?></td></tr>
	    <tr><td>Nip Leader</td><td><?php echo $nip_leader; ?></td></tr>
	    <tr><td>Rate Travel</td><td><?php echo $rate_travel; ?></td></tr>
	    <tr><td>Nip</td><td><?php echo $nip; ?></td></tr>
	    <tr><td>Purpose</td><td><?php echo $purpose; ?></td></tr>
	    <tr><td>Transport</td><td><?php echo $transport; ?></td></tr>
	    <tr><td>Place From</td><td><?php echo $place_from; ?></td></tr>
	    <tr><td>Place To</td><td><?php echo $place_to; ?></td></tr>
	    <tr><td>Length Journey</td><td><?php echo $length_journey; ?></td></tr>
	    <tr><td>Date Go</td><td><?php echo $date_go; ?></td></tr>
	    <tr><td>Date Back</td><td><?php echo $date_back; ?></td></tr>
	    <tr><td>Government</td><td><?php echo $government; ?></td></tr>
	    <tr><td>Budget</td><td><?php echo $budget; ?></td></tr>
	    <tr><td>Budget From</td><td><?php echo $budget_from; ?></td></tr>
	    <tr><td>Description</td><td><?php echo $description; ?></td></tr>
	    <tr><td>Result Date</td><td><?php echo $result_date; ?></td></tr>
	    <tr><td>Result</td><td><?php echo $result; ?></td></tr>
	    <tr><td>Result Username</td><td><?php echo $result_username; ?></td></tr>
	    <tr><td>Result Username Update</td><td><?php echo $result_username_update; ?></td></tr>
	    <tr><td>File</td><td><?php echo $file; ?></td></tr>
	    <tr><td>File Update</td><td><?php echo $file_update; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Username Update</td><td><?php echo $username_update; ?></td></tr>
	    <tr><td>Datetime Insert</td><td><?php echo $datetime_insert; ?></td></tr>
	    <tr><td>Datetime Update</td><td><?php echo $datetime_update; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('sppd') ?>" class="btn btn-default"><i class='fa fa-home'></i>Back To Home</a></td></tr>
	</table>
</div>
</div>
</div>
</div>