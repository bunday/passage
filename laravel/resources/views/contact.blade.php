@extends('layouts.app')
@section('content')
<section class="">
<div class="container">
<div class="sc_content mainWrap">
<div class="sc_section sc_section_style_2 sc_align_center sc_columns_2_3">
<div class="sc_columns  sc_columns_3 sc_columns_indent">
<div class="sc_columns_item  sc_columns_item_coun_1 odd first">
<h5 class="sc_title sc_title_style_3 margin_top_50 margin_bottom_20">Contact Info</h5>
<div class="sc_contact_info">
<div class="sc_contact_info_wrap">
<div class="sc_contact_info_item sc_contact_address_1">
<div class="sc_contact_info_lable">Address:</div>
Zik Hall, University of Ibadan
</div>
<div class="sc_contact_info_item sc_contact_phone_1">
<div class="sc_contact_info_lable">Phone:</div>
07060512502
</div>
<div class="sc_contact_info_item sc_contact_website">
<div class="sc_contact_info_lable">Twitter:</div>
www.twitter.com/bundayy_
</div>
<div class="sc_contact_info_item sc_contact_email">
<div class="sc_contact_info_lable">Email:</div>
seyyids90@gmail.com
</div>
</div>
</div>
</div>
<div class=" sc_columns_item  sc_columns_item_coun_2 colspan_2 even">
<h5 class="sc_title sc_title_style_3 margin_top_50 margin_bottom_20">Leave a message</h5>
<div class="sc_form contact_form_1">
<form class="contact_1" method="post" action="http://healthyfarm-html.themerex.net/include/contact-form.php">
<div class="sc_columns_3 sc_columns_indent">
<div class="sc_columns_item sc_form_username">
<label class="required" for="contact_form_username">Name</label>
<input type="text" name="name" id="contact_form_username">
</div>
<div class="sc_columns_item sc_form_email">
<label class="required" for="contact_form_email">E-mail</label>
<input type="text" name="email" id="contact_form_email">
</div>
<div class="sc_columns_item sc_form_subj">
<label class="required" for="contact_form_subj">Subject</label>
<input type="text" name="subject" id="contact_form_subj">
</div>
</div>
<div class="sc_form_message">
<label class="required" for="contact_form_message">Your Message</label>
<textarea id="contact_form_message" class="textAreaSize" name="message"></textarea>
</div>
<div class="sc_form_button">
<div class="sc_button sc_button_style_3 sc_button_skin_dark sc_button_style_bg sc_button_size_small">
<button type="submit" name="contact_submit" class="contact_form_submit">submit</button>
</div>
</div>
<div class="result sc_infobox"></div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection