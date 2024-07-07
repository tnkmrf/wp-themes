<?php 
/**
 * Template Name: Contact
 * 
 *
 */


?>
<?php
get_header();
?>

<div class="contact-page">
    <div class="normal-width">
        <div class="contact-intro">
        <?php echo wp_kses_post( get_field('contact_intro'));?>
        </div>
        <form action="">
            <div class="form-item">
            <label id="labelemail" for="tm-email">Email</label>
            <input id="tm-email" name="tm-email" placeholder="Email" type="text" required onkeyup="emailUp()">
            </div>
            <div class="form-item">
            <label id="labeltext" for="tm-textarea">Message</label>
            <textarea id="tm-textarea" placeholder="Message" rows="4" name="tm-textarea" required onkeyup="textUp()"></textarea>
            </div>
          
            <button>Send</button>
        </form>
    </div>
</div>
<?php
get_footer();