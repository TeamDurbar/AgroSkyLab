<link rel="stylesheet" href="css/form.css">
<h4 class="second"><?php echo $title; ?></h4>

<?php
$message = $this->session->userdata('message');
if ($message) {
    ?>

<div style="border: 1px seagreen; background-color: greenyellow;padding: 5px;border-radius: 10px;margin-bottom: 10px;">
        <?php echo $message; ?>
    </div>
    <?php
    $this->session->unset_userdata('message');
}
?>

<form id="form" action="<?php echo base_url(); ?>contacts_sent" method="POST">
    <div class="success_wrapper">
        
        <div class="success-message">Contact form submitted</div>
    </div>
    <label class="name">
        <input type="text" placeholder="Name:"  class="input-text"name="name" required="" data-constraints="@Required @JustLetters" />
        <span class="empty-message">*This field is required.</span>
        <span class="error-message">*This is not a valid name.</span>
    </label>
    <label class="email">
        <input type="text" placeholder="E-mail:" name="email" required="" data-constraints="@Required @Email" />
        <span class="empty-message">*This field is required.</span>
        <span class="error-message">*This is not a valid email.</span>
    </label>

    <label class="phone">
        <input type="text" placeholder="Phone:" name="phone" data-constraints="@Required @JustNumbers"/>
        <span class="empty-message">*This field is required.</span>
        <span class="error-message">*This is not a valid phone.</span>
    </label>
    <label class="name">
        <input type="file" placeholder="Images" name="photo"/>
    </label>
    <label class="name">
        <select name="location" style="padding: 10px; border: 1px solid #b4ce45;width: 100%">
            <option value="">Select</option>
            <option value="">Dhaka</option>
            <option value="">Rajshahi</option>
            <option value="">Khulna</option>
        </select>
    </label>
    <label class="message">
        <textarea placeholder="Message:" name="message"></textarea>
    </label>
    <div>
        <div class="wrapper">
            <div class="btns">
                <button type="submit" class="btn">Send </button>
            </div>

        </div>
    </div>
</form>
