<!-- Snippet: http://bootsnipp.com/snippets/featured/mix-amp-match-register -->
<div id="register">
    <div class="col-md-cust1 selected">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <?php echo form_open('signup'); ?>
                  <h2>Registreren</h2>  
                <?php echo validation_errors('<p class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'); ?> </p>
                <?php if ($this->session->flashdata('error') !== FALSE) { 
                    echo "<p class=\"alert alert-dismissable alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
                    echo $this->session->flashdata('error'); 
                    echo "</p>";
                } ?>
                <?php 
                if ($this->session->flashdata('success') !== FALSE) { 
                    echo "<p class=\"alert alert-dismissable alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
                    echo $this->session->flashdata('success'); 
                    echo "</p>";
                }
                ?>
            <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input value="<?php echo set_value('voornaam'); ?>" type="text" name="voornaam" id="voornaam" class="form-control input-lg" placeholder="Voornaam" tabindex="1" required>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input value="<?php echo set_value('achternaam'); ?>" type="text" name="achternaam" id="achternaam" class="form-control input-lg" placeholder="Achternaam" tabindex="2" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input value="<?php echo set_value('gebruikersnaam'); ?>" type="text" name="gebruikersnaam" id="gebruikersnaam" class="form-control input-lg" placeholder="Gebruikersnaam" tabindex="3" required>

                </div>
                <div class="form-group">
                    <input value="<?php echo set_value('email'); ?>" type="email" name="email" id="email" class="form-control input-lg" placeholder="E-Mail" tabindex="4" required>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input value="<?php echo set_value('password'); ?>" type="password" name="password" id="password" class="form-control input-lg" placeholder="Wachtwoord" tabindex="5" required>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input value="<?php echo set_value('passconf'); ?>" type="password" name="passconf" id="password_confirmation" class="form-control input-lg" oninput="check(this)" placeholder="Bevestig Wachtwoord" tabindex="6" required>
                        </div>
                    </div>
                </div>
                <p>
                    <?php $this->load->helper('dob'); ?>
                    <label>Geboortedatum</label><br/>
                    <select class="selectpicker" name="dob_day"><option value="0">Dag:</option><?php echo generate_options(1, 31) ?></select>
                    <select class="selectpicker" name="dob_month"><option value="0">Maand:</option><?php echo generate_options(1, 12) ?></select>
                    <select class="selectpicker" name="dob_year"><option value="0">Jaar:</option><?php echo generate_options(2015, 1900) ?></select>
                </p>
                <p>
                <?php echo $recaptcha_html; ?><br/>
                <div class="row">
                    <div class="col-xs-6 col-md-6 pull-right">
                        <input type="submit" class="btn btn-green btn-block btn-lg" value="signup" />
                        <br/>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    </div>