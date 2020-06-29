<?php 
	include '_header.php';
	include '_header2.php';
?>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>অনলাইন জিডি</h2>
			</div>

			<div class="panel-body">
			<form action="MailSend.php" method="POST" enctype="multipart/form-data"> 
			<div style="max-width: 600px; margin: 0 auto;">
			<table class="table-responsive">
			

				<tr><td bgcolor="#f7f7f7"><label for="name"><font size="3">আপনার নাম</font></label><br></td>
				<td colspan="3"><input type="text" id="name" name="name" class="form-control" required />
				</td></tr>
				
				<tr><td bgcolor="#f7f7f7"><label for="name"><font size="3">পিতার নাম</label><br></td>
				<td colspan="3"><input type="text" id="fathername" name="fathername" class="form-control" required />
				</td></tr>
				
				<tr><td bgcolor="#f7f7f7"><label for="name"><font size="3">মাতার নাম</label><br></td>
				<td colspan="3"><input type="text" id="mothername" name="mothername" class="form-control" required />
				</td></tr>
				
				
				<tr><td bgcolor="#f7f7f7"><label for="name"><font size="3">জাতীয় পরিচয় পত্র নং</label><br></td>
				<td colspan="3"><input type="text" id="nid" name="nid" class="form-control" required />
				</td></tr>
				
				
				<tr><td bgcolor="#f7f7f7"><label for="email"><font size="3">ইমেইল</label><br></td>
				<td colspan="3"><input type="email" id="email" name="email" class="form-control" required />
				</td></tr>
				
				
				<tr><td bgcolor="#f7f7f7"><label for="phone"><font size="3">ফোন নম্বর</label><br></td>
				<td colspan="3"><input type="text" id="phone" name="phone" class="form-control" required/>
				</td></tr>
				
				<tr><td bgcolor="#f7f7f7"><label for="altphone"><font size="3">বিকল্প মোবাইল নম্বর</label><br></td>
				<td colspan="3"><input type="text" id="altphone" name="altphone" class="form-control"  size="35" />
				</td></tr>
				
				<tr><td bgcolor="#f7f7f7"><label for="birthdate"><font size="3">জন্ম তারিখ</label><br></td>
				<td colspan="3"><input type="date" id="birthdate" name="birthdate" size="35" border="10%" required/>
				</td></tr>
				
				
				<tr><td bgcolor="#f7f7f7"><label for="address"><font size="3">স্থায়ী ঠিকানা</label><br></td>
				<td colspan="3"><input type="text" id="permanentaddress" name="permanentaddress" class="form-control" required/>
				</td></tr>
				
				<tr><td bgcolor="#f7f7f7"><label for="zipcode"><font size="3">বর্তমান ঠিকানা</label><br></td>
				<td colspan="3"><input type="text" id="presentaddress" name="presentaddress" class="form-control" required/>
				</td></tr>
				
				
				<tr><td bgcolor="#f7f7f7"><label for="zipcode"><font size="3">জিপ কোড</label>	<br></td>
				<td colspan="3"><input id="zipcode" name="zipcode" minlength="4"  maxlength="6" size="35" required/>
				</td></tr>
				
				<tr><td bgcolor="#f7f7f7"><label for="gender"><font size="3">লিঙ্গ</label><br></td>
				<td colspan="3" border="10%">
					<select size="1" name="gender" id="gender">
						<option value="-">-</option>
						<option value="Female">নারী</option>
						<option value="Male">পুরুষ</option>
						<option value="Other">অন্যান্য</option>
					</select></td></tr>
				<tr><td bgcolor="#f7f7f7"><label for="i_date"><font size="3">ঘটনার তারিখ</label><br></td>
				<td colspan="3"><input type="date" id="i_date" name="i_date" size="35" border="10%" required/>
				</td></tr>
				
				<tr><td bgcolor="#f7f7f7"><label for="i_time"><font size="3">ঘটনার সময়</label><br></td>
				<td colspan="3"><input type="time" id="i_time" name="i_time" size="35" border="10%" required/>
				</td></tr>
				
				<tr><td bgcolor="#f7f7f7"><label for="i_description"><font size="3">ঘটনার বিবরণ</label><br></td>
				<td colspan="3"><textarea name="i_description" id="i_description" required cols="40" rows="4"></textarea>
				</td></tr>
				
				<tr><td bgcolor="#f7f7f7"><label for="image"><font size="2.5">প্রমাণের ছবি সংযোগ করুন	</label><br></td>
				<td colspan="3" style="padding:5px"><input type="file" id="image1" name="image1" />
				</td></tr>

				<tr><td bgcolor="#f7f7f7"><label for="image"><font size="2.5">প্রমাণের ছবি সংযোগ করুন	</label><br></td>
				<td colspan="3" style="padding:5px"><input type="file" id="image2" name="image2"  />
				</td></tr>
				
				<tr><td bgcolor="#f7f7f7"><label for="image"><font size="2.5">প্রমাণের ছবি সংযোগ করুন	</label><br></td>
					<td colspan="3" style="padding:5px"><input type="file" id="image3" name="image3" />
				</td></tr>
				
				<tr><td bgcolor="#f7f7f7" style="padding-right:5px"><label for="image"><font size="2.5">প্রমাণের ছবি সংযোগ করুন	</label><br></td>
					<td colspan="3" style="padding:5px"><input type="file" id="image4" name="image4"  />
				</td></tr>
				<tr><td></td><td>
				<button type="submit" name="submit" class="btn btn-success">Submit</button></td></tr>
			</font>
			
			</table>
			</form>
			</div>
		</div>
<?php include 'inc/footer.php' ?>

