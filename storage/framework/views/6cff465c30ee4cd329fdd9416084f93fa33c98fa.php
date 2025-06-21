<div class="col">
            <!-- Card -->
            <div class="card border-0 scroll-mt-3" id="basicInformationSection">
                <div class="card-header">
                    <h2 class="h3 mb-0">Basic information</h2>
                </div>

                <div >
                    <form method="POST" action="javascript:void(0)" id="updateprofileform">
                        <?php echo csrf_field(); ?>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="fullName" class="col-form-label">Full Name</label>
                </div>

                <div class="col-lg">
                    <input type="text" class="form-control" id="fullName" value="<?php echo e(Auth::user()->name); ?>" name="name" required>
                    <div class="invalid-feedback">Please add your full name</div>
                </div>
            </div> <!-- / .row -->

            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="phone" class="col-form-label">Phone</label>
                </div>

                <div class="col-lg">
                    <input type="text" class="form-control" id="phone" value="<?php echo e(Auth::user()->phone); ?>" name="phone" required>
                                    </div>
            </div> <!-- / .row -->

            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="emailAddress" class="col-form-label">Email address</label>
                </div>

                <div class="col-lg">
                    <input type="text" class="form-control" id="emailAddress" value="<?php echo e(Auth::user()->email); ?>" name="email" readonly>
                    <div class="invalid-feedback">Please add your email address</div>
                </div>
            </div> <!-- / .row -->


<div class="row mb-4">
    <div class="col-lg-3">
        <label for="country" class="col-form-label">Country</label>
    </div>

    <div class="col-lg">
        <div class="mb-4">
            <select class="form-select" required name="country">
                <option value="Afghanistan" <?php echo e(Auth::user()->country == 'Afghanistan' ? 'selected' : ''); ?>>Afghanistan</option>
                <option value="Albania" <?php echo e(Auth::user()->country == 'Albania' ? 'selected' : ''); ?>>Albania</option>
                <option value="Algeria" <?php echo e(Auth::user()->country == 'Algeria' ? 'selected' : ''); ?>>Algeria</option>
                <option value="Andorra" <?php echo e(Auth::user()->country == 'Andorra' ? 'selected' : ''); ?>>Andorra</option>
                <option value="Angola" <?php echo e(Auth::user()->country == 'Angola' ? 'selected' : ''); ?>>Angola</option>
                <option value="Antigua and Barbuda" <?php echo e(Auth::user()->country == 'Antigua and Barbuda' ? 'selected' : ''); ?>>Antigua and Barbuda</option>
                <option value="Argentina" <?php echo e(Auth::user()->country == 'Argentina' ? 'selected' : ''); ?>>Argentina</option>
                <option value="Armenia" <?php echo e(Auth::user()->country == 'Armenia' ? 'selected' : ''); ?>>Armenia</option>
                <option value="Australia" <?php echo e(Auth::user()->country == 'Australia' ? 'selected' : ''); ?>>Australia</option>
                <option value="Austria" <?php echo e(Auth::user()->country == 'Austria' ? 'selected' : ''); ?>>Austria</option>
                <option value="Azerbaijan" <?php echo e(Auth::user()->country == 'Azerbaijan' ? 'selected' : ''); ?>>Azerbaijan</option>
                <option value="Bahamas" <?php echo e(Auth::user()->country == 'Bahamas' ? 'selected' : ''); ?>>Bahamas</option>
                <option value="Bahrain" <?php echo e(Auth::user()->country == 'Bahrain' ? 'selected' : ''); ?>>Bahrain</option>
                <option value="Bangladesh" <?php echo e(Auth::user()->country == 'Bangladesh' ? 'selected' : ''); ?>>Bangladesh</option>
                <option value="Barbados" <?php echo e(Auth::user()->country == 'Barbados' ? 'selected' : ''); ?>>Barbados</option>
                <option value="Belarus" <?php echo e(Auth::user()->country == 'Belarus' ? 'selected' : ''); ?>>Belarus</option>
                <option value="Belgium" <?php echo e(Auth::user()->country == 'Belgium' ? 'selected' : ''); ?>>Belgium</option>
                <option value="Belize" <?php echo e(Auth::user()->country == 'Belize' ? 'selected' : ''); ?>>Belize</option>
                <option value="Benin" <?php echo e(Auth::user()->country == 'Benin' ? 'selected' : ''); ?>>Benin</option>
                <option value="Bhutan" <?php echo e(Auth::user()->country == 'Bhutan' ? 'selected' : ''); ?>>Bhutan</option>
                <option value="Bolivia" <?php echo e(Auth::user()->country == 'Bolivia' ? 'selected' : ''); ?>>Bolivia</option>
                <option value="Bosnia and Herzegovina" <?php echo e(Auth::user()->country == 'Bosnia and Herzegovina' ? 'selected' : ''); ?>>Bosnia and Herzegovina</option>
                <option value="Botswana" <?php echo e(Auth::user()->country == 'Botswana' ? 'selected' : ''); ?>>Botswana</option>
                <option value="Brazil" <?php echo e(Auth::user()->country == 'Brazil' ? 'selected' : ''); ?>>Brazil</option>
                <option value="Brunei Darussalam" <?php echo e(Auth::user()->country == 'Brunei Darussalam' ? 'selected' : ''); ?>>Brunei Darussalam</option>
                <option value="Bulgaria" <?php echo e(Auth::user()->country == 'Bulgaria' ? 'selected' : ''); ?>>Bulgaria</option>
                <option value="Burkina Faso" <?php echo e(Auth::user()->country == 'Burkina Faso' ? 'selected' : ''); ?>>Burkina Faso</option>
                <option value="Burundi" <?php echo e(Auth::user()->country == 'Burundi' ? 'selected' : ''); ?>>Burundi</option>
                <option value="Cabo Verde" <?php echo e(Auth::user()->country == 'Cabo Verde' ? 'selected' : ''); ?>>Cabo Verde</option>
                <option value="Cambodia" <?php echo e(Auth::user()->country == 'Cambodia' ? 'selected' : ''); ?>>Cambodia</option>
                <option value="Cameroon" <?php echo e(Auth::user()->country == 'Cameroon' ? 'selected' : ''); ?>>Cameroon</option>
                <option value="Canada" <?php echo e(Auth::user()->country == 'Canada' ? 'selected' : ''); ?>>Canada</option>
                <option value="Central African Republic" <?php echo e(Auth::user()->country == 'Central African Republic' ? 'selected' : ''); ?>>Central African Republic</option>
                <option value="Chad" <?php echo e(Auth::user()->country == 'Chad' ? 'selected' : ''); ?>>Chad</option>
                <option value="Chile" <?php echo e(Auth::user()->country == 'Chile' ? 'selected' : ''); ?>>Chile</option>
                <option value="China" <?php echo e(Auth::user()->country == 'China' ? 'selected' : ''); ?>>China</option>
                <option value="Colombia" <?php echo e(Auth::user()->country == 'Colombia' ? 'selected' : ''); ?>>Colombia</option>
                <option value="Comoros" <?php echo e(Auth::user()->country == 'Comoros' ? 'selected' : ''); ?>>Comoros</option>
                <option value="Congo" <?php echo e(Auth::user()->country == 'Congo' ? 'selected' : ''); ?>>Congo</option>
                <option value="Costa Rica" <?php echo e(Auth::user()->country == 'Costa Rica' ? 'selected' : ''); ?>>Costa Rica</option>
                <option value="Croatia" <?php echo e(Auth::user()->country == 'Croatia' ? 'selected' : ''); ?>>Croatia</option>
                <option value="Cuba" <?php echo e(Auth::user()->country == 'Cuba' ? 'selected' : ''); ?>>Cuba</option>
                <option value="Cyprus" <?php echo e(Auth::user()->country == 'Cyprus' ? 'selected' : ''); ?>>Cyprus</option>
                <option value="Czech Republic" <?php echo e(Auth::user()->country == 'Czech Republic' ? 'selected' : ''); ?>>Czech Republic</option>
                <option value="Denmark" <?php echo e(Auth::user()->country == 'Denmark' ? 'selected' : ''); ?>>Denmark</option>
                <option value="Djibouti" <?php echo e(Auth::user()->country == 'Djibouti' ? 'selected' : ''); ?>>Djibouti</option>
                <option value="Dominica" <?php echo e(Auth::user()->country == 'Dominica' ? 'selected' : ''); ?>>Dominica</option>
                <option value="Dominican Republic" <?php echo e(Auth::user()->country == 'Dominican Republic' ? 'selected' : ''); ?>>Dominican Republic</option>
                <option value="Ecuador" <?php echo e(Auth::user()->country == 'Ecuador' ? 'selected' : ''); ?>>Ecuador</option>
                <option value="Egypt" <?php echo e(Auth::user()->country == 'Egypt' ? 'selected' : ''); ?>>Egypt</option>
                <option value="El Salvador" <?php echo e(Auth::user()->country == 'El Salvador' ? 'selected' : ''); ?>>El Salvador</option>
                <option value="Equatorial Guinea" <?php echo e(Auth::user()->country == 'Equatorial Guinea' ? 'selected' : ''); ?>>Equatorial Guinea</option>
                <option value="Eritrea" <?php echo e(Auth::user()->country == 'Eritrea' ? 'selected' : ''); ?>>Eritrea</option>
                <option value="Estonia" <?php echo e(Auth::user()->country == 'Estonia' ? 'selected' : ''); ?>>Estonia</option>
                <option value="Eswatini" <?php echo e(Auth::user()->country == 'Eswatini' ? 'selected' : ''); ?>>Eswatini</option>
                <option value="Ethiopia" <?php echo e(Auth::user()->country == 'Ethiopia' ? 'selected' : ''); ?>>Ethiopia</option>
                <option value="Fiji" <?php echo e(Auth::user()->country == 'Fiji' ? 'selected' : ''); ?>>Fiji</option>
                <option value="Finland" <?php echo e(Auth::user()->country == 'Finland' ? 'selected' : ''); ?>>Finland</option>
                <option value="France" <?php echo e(Auth::user()->country == 'France' ? 'selected' : ''); ?>>France</option>
                <option value="Gabon" <?php echo e(Auth::user()->country == 'Gabon' ? 'selected' : ''); ?>>Gabon</option>
                <option value="Gambia" <?php echo e(Auth::user()->country == 'Gambia' ? 'selected' : ''); ?>>Gambia</option>
                <option value="Georgia" <?php echo e(Auth::user()->country == 'Georgia' ? 'selected' : ''); ?>>Georgia</option>
                <option value="Germany" <?php echo e(Auth::user()->country == 'Germany' ? 'selected' : ''); ?>>Germany</option>
                <option value="Ghana" <?php echo e(Auth::user()->country == 'Ghana' ? 'selected' : ''); ?>>Ghana</option>
                <option value="Greece" <?php echo e(Auth::user()->country == 'Greece' ? 'selected' : ''); ?>>Greece</option>
                <option value="Grenada" <?php echo e(Auth::user()->country == 'Grenada' ? 'selected' : ''); ?>>Grenada</option>
                <option value="Guatemala" <?php echo e(Auth::user()->country == 'Guatemala' ? 'selected' : ''); ?>>Guatemala</option>
                <option value="Guinea" <?php echo e(Auth::user()->country == 'Guinea' ? 'selected' : ''); ?>>Guinea</option>
                <option value="Guinea-Bissau" <?php echo e(Auth::user()->country == 'Guinea-Bissau' ? 'selected' : ''); ?>>Guinea-Bissau</option>
                <option value="Guyana" <?php echo e(Auth::user()->country == 'Guyana' ? 'selected' : ''); ?>>Guyana</option>
                <option value="Haiti" <?php echo e(Auth::user()->country == 'Haiti' ? 'selected' : ''); ?>>Haiti</option>
                <option value="Honduras" <?php echo e(Auth::user()->country == 'Honduras' ? 'selected' : ''); ?>>Honduras</option>
                <option value="Hungary" <?php echo e(Auth::user()->country == 'Hungary' ? 'selected' : ''); ?>>Hungary</option>
                <option value="Iceland" <?php echo e(Auth::user()->country == 'Iceland' ? 'selected' : ''); ?>>Iceland</option>
                <option value="India" <?php echo e(Auth::user()->country == 'India' ? 'selected' : ''); ?>>India</option>
                <option value="Indonesia" <?php echo e(Auth::user()->country == 'Indonesia' ? 'selected' : ''); ?>>Indonesia</option>
                <option value="Iran" <?php echo e(Auth::user()->country == 'Iran' ? 'selected' : ''); ?>>Iran</option>
                <option value="Iraq" <?php echo e(Auth::user()->country == 'Iraq' ? 'selected' : ''); ?>>Iraq</option>
                <option value="Ireland" <?php echo e(Auth::user()->country == 'Ireland' ? 'selected' : ''); ?>>Ireland</option>
                <option value="Israel" <?php echo e(Auth::user()->country == 'Israel' ? 'selected' : ''); ?>>Israel</option>
                <option value="Italy" <?php echo e(Auth::user()->country == 'Italy' ? 'selected' : ''); ?>>Italy</option>
                <option value="Jamaica" <?php echo e(Auth::user()->country == 'Jamaica' ? 'selected' : ''); ?>>Jamaica</option>
                <option value="Japan" <?php echo e(Auth::user()->country == 'Japan' ? 'selected' : ''); ?>>Japan</option>
                <option value="Jordan" <?php echo e(Auth::user()->country == 'Jordan' ? 'selected' : ''); ?>>Jordan</option>
                <option value="Kazakhstan" <?php echo e(Auth::user()->country == 'Kazakhstan' ? 'selected' : ''); ?>>Kazakhstan</option>
                <option value="Kenya" <?php echo e(Auth::user()->country == 'Kenya' ? 'selected' : ''); ?>>Kenya</option>
                <option value="Kiribati" <?php echo e(Auth::user()->country == 'Kiribati' ? 'selected' : ''); ?>>Kiribati</option>
                <option value="Korea, Democratic People's Republic of" <?php echo e(Auth::user()->country == 'Korea, Democratic People\'s Republic of' ? 'selected' : ''); ?>>North Korea</option>
                <option value="Korea, Republic of" <?php echo e(Auth::user()->country == 'Korea, Republic of' ? 'selected' : ''); ?>>South Korea</option>
                <option value="Kuwait" <?php echo e(Auth::user()->country == 'Kuwait' ? 'selected' : ''); ?>>Kuwait</option>
                <option value="Kyrgyzstan" <?php echo e(Auth::user()->country == 'Kyrgyzstan' ? 'selected' : ''); ?>>Kyrgyzstan</option>
                <option value="Laos" <?php echo e(Auth::user()->country == 'Laos' ? 'selected' : ''); ?>>Laos</option>
                <option value="Latvia" <?php echo e(Auth::user()->country == 'Latvia' ? 'selected' : ''); ?>>Latvia</option>
                <option value="Lebanon" <?php echo e(Auth::user()->country == 'Lebanon' ? 'selected' : ''); ?>>Lebanon</option>
                <option value="Lesotho" <?php echo e(Auth::user()->country == 'Lesotho' ? 'selected' : ''); ?>>Lesotho</option>
                <option value="Liberia" <?php echo e(Auth::user()->country == 'Liberia' ? 'selected' : ''); ?>>Liberia</option>
                <option value="Libya" <?php echo e(Auth::user()->country == 'Libya' ? 'selected' : ''); ?>>Libya</option>
                <option value="Liechtenstein" <?php echo e(Auth::user()->country == 'Liechtenstein' ? 'selected' : ''); ?>>Liechtenstein</option>
                <option value="Lithuania" <?php echo e(Auth::user()->country == 'Lithuania' ? 'selected' : ''); ?>>Lithuania</option>
                <option value="Luxembourg" <?php echo e(Auth::user()->country == 'Luxembourg' ? 'selected' : ''); ?>>Luxembourg</option>
                <option value="Madagascar" <?php echo e(Auth::user()->country == 'Madagascar' ? 'selected' : ''); ?>>Madagascar</option>
                <option value="Malawi" <?php echo e(Auth::user()->country == 'Malawi' ? 'selected' : ''); ?>>Malawi</option>
                <option value="Malaysia" <?php echo e(Auth::user()->country == 'Malaysia' ? 'selected' : ''); ?>>Malaysia</option>
                <option value="Maldives" <?php echo e(Auth::user()->country == 'Maldives' ? 'selected' : ''); ?>>Maldives</option>
                <option value="Mali" <?php echo e(Auth::user()->country == 'Mali' ? 'selected' : ''); ?>>Mali</option>
                <option value="Malta" <?php echo e(Auth::user()->country == 'Malta' ? 'selected' : ''); ?>>Malta</option>
                <option value="Marshall Islands" <?php echo e(Auth::user()->country == 'Marshall Islands' ? 'selected' : ''); ?>>Marshall Islands</option>
                <option value="Mauritania" <?php echo e(Auth::user()->country == 'Mauritania' ? 'selected' : ''); ?>>Mauritania</option>
                <option value="Mauritius" <?php echo e(Auth::user()->country == 'Mauritius' ? 'selected' : ''); ?>>Mauritius</option>
                <option value="Mexico" <?php echo e(Auth::user()->country == 'Mexico' ? 'selected' : ''); ?>>Mexico</option>
                <option value="Micronesia (Federated States of)" <?php echo e(Auth::user()->country == 'Micronesia (Federated States of)' ? 'selected' : ''); ?>>Micronesia</option>
                <option value="Moldova (Republic of)" <?php echo e(Auth::user()->country == 'Moldova (Republic of)' ? 'selected' : ''); ?>>Moldova</option>
                <option value="Monaco" <?php echo e(Auth::user()->country == 'Monaco' ? 'selected' : ''); ?>>Monaco</option>
                <option value="Mongolia" <?php echo e(Auth::user()->country == 'Mongolia' ? 'selected' : ''); ?>>Mongolia</option>
                <option value="Montenegro" <?php echo e(Auth::user()->country == 'Montenegro' ? 'selected' : ''); ?>>Montenegro</option>
                <option value="Morocco" <?php echo e(Auth::user()->country == 'Morocco' ? 'selected' : ''); ?>>Morocco</option>
                <option value="Mozambique" <?php echo e(Auth::user()->country == 'Mozambique' ? 'selected' : ''); ?>>Mozambique</option>
                <option value="Myanmar" <?php echo e(Auth::user()->country == 'Myanmar' ? 'selected' : ''); ?>>Myanmar</option>
                <option value="Namibia" <?php echo e(Auth::user()->country == 'Namibia' ? 'selected' : ''); ?>>Namibia</option>
                <option value="Nauru" <?php echo e(Auth::user()->country == 'Nauru' ? 'selected' : ''); ?>>Nauru</option>
                <option value="Nepal" <?php echo e(Auth::user()->country == 'Nepal' ? 'selected' : ''); ?>>Nepal</option>
                <option value="Netherlands" <?php echo e(Auth::user()->country == 'Netherlands' ? 'selected' : ''); ?>>Netherlands</option>
                <option value="New Zealand" <?php echo e(Auth::user()->country == 'New Zealand' ? 'selected' : ''); ?>>New Zealand</option>
                <option value="Nicaragua" <?php echo e(Auth::user()->country == 'Nicaragua' ? 'selected' : ''); ?>>Nicaragua</option>
                <option value="Niger" <?php echo e(Auth::user()->country == 'Niger' ? 'selected' : ''); ?>>Niger</option>
                <option value="Nigeria" <?php echo e(Auth::user()->country == 'Nigeria' ? 'selected' : ''); ?>>Nigeria</option>
                <option value="North Macedonia" <?php echo e(Auth::user()->country == 'North Macedonia' ? 'selected' : ''); ?>>North Macedonia</option>
                <option value="Norway" <?php echo e(Auth::user()->country == 'Norway' ? 'selected' : ''); ?>>Norway</option>
                <option value="Oman" <?php echo e(Auth::user()->country == 'Oman' ? 'selected' : ''); ?>>Oman</option>
                <option value="Pakistan" <?php echo e(Auth::user()->country == 'Pakistan' ? 'selected' : ''); ?>>Pakistan</option>
                <option value="Palau" <?php echo e(Auth::user()->country == 'Palau' ? 'selected' : ''); ?>>Palau</option>
                <option value="Panama" <?php echo e(Auth::user()->country == 'Panama' ? 'selected' : ''); ?>>Panama</option>
                <option value="Papua New Guinea" <?php echo e(Auth::user()->country == 'Papua New Guinea' ? 'selected' : ''); ?>>Papua New Guinea</option>
                <option value="Paraguay" <?php echo e(Auth::user()->country == 'Paraguay' ? 'selected' : ''); ?>>Paraguay</option>
                <option value="Peru" <?php echo e(Auth::user()->country == 'Peru' ? 'selected' : ''); ?>>Peru</option>
                <option value="Philippines" <?php echo e(Auth::user()->country == 'Philippines' ? 'selected' : ''); ?>>Philippines</option>
                <option value="Poland" <?php echo e(Auth::user()->country == 'Poland' ? 'selected' : ''); ?>>Poland</option>
                <option value="Portugal" <?php echo e(Auth::user()->country == 'Portugal' ? 'selected' : ''); ?>>Portugal</option>
                <option value="Qatar" <?php echo e(Auth::user()->country == 'Qatar' ? 'selected' : ''); ?>>Qatar</option>
                <option value="Romania" <?php echo e(Auth::user()->country == 'Romania' ? 'selected' : ''); ?>>Romania</option>
                <option value="Russia" <?php echo e(Auth::user()->country == 'Russia' ? 'selected' : ''); ?>>Russia</option>
                <option value="Rwanda" <?php echo e(Auth::user()->country == 'Rwanda' ? 'selected' : ''); ?>>Rwanda</option>
                <option value="Saint Kitts and Nevis" <?php echo e(Auth::user()->country == 'Saint Kitts and Nevis' ? 'selected' : ''); ?>>Saint Kitts and Nevis</option>
                <option value="Saint Lucia" <?php echo e(Auth::user()->country == 'Saint Lucia' ? 'selected' : ''); ?>>Saint Lucia</option>
                <option value="Saint Vincent and the Grenadines" <?php echo e(Auth::user()->country == 'Saint Vincent and the Grenadines' ? 'selected' : ''); ?>>Saint Vincent and the Grenadines</option>
                <option value="Samoa" <?php echo e(Auth::user()->country == 'Samoa' ? 'selected' : ''); ?>>Samoa</option>
                <option value="San Marino" <?php echo e(Auth::user()->country == 'San Marino' ? 'selected' : ''); ?>>San Marino</option>
                <option value="Sao Tome and Principe" <?php echo e(Auth::user()->country == 'Sao Tome and Principe' ? 'selected' : ''); ?>>Sao Tome and Principe</option>
                <option value="Saudi Arabia" <?php echo e(Auth::user()->country == 'Saudi Arabia' ? 'selected' : ''); ?>>Saudi Arabia</option>
                <option value="Senegal" <?php echo e(Auth::user()->country == 'Senegal' ? 'selected' : ''); ?>>Senegal</option>
                <option value="Serbia" <?php echo e(Auth::user()->country == 'Serbia' ? 'selected' : ''); ?>>Serbia</option>
                <option value="Seychelles" <?php echo e(Auth::user()->country == 'Seychelles' ? 'selected' : ''); ?>>Seychelles</option>
                <option value="Sierra Leone" <?php echo e(Auth::user()->country == 'Sierra Leone' ? 'selected' : ''); ?>>Sierra Leone</option>
                <option value="Singapore" <?php echo e(Auth::user()->country == 'Singapore' ? 'selected' : ''); ?>>Singapore</option>
                <option value="Slovakia" <?php echo e(Auth::user()->country == 'Slovakia' ? 'selected' : ''); ?>>Slovakia</option>
                <option value="Slovenia" <?php echo e(Auth::user()->country == 'Slovenia' ? 'selected' : ''); ?>>Slovenia</option>
                <option value="Solomon Islands" <?php echo e(Auth::user()->country == 'Solomon Islands' ? 'selected' : ''); ?>>Solomon Islands</option>
                <option value="Somalia" <?php echo e(Auth::user()->country == 'Somalia' ? 'selected' : ''); ?>>Somalia</option>
                <option value="South Africa" <?php echo e(Auth::user()->country == 'South Africa' ? 'selected' : ''); ?>>South Africa</option>
                <option value="South Sudan" <?php echo e(Auth::user()->country == 'South Sudan' ? 'selected' : ''); ?>>South Sudan</option>
                <option value="Spain" <?php echo e(Auth::user()->country == 'Spain' ? 'selected' : ''); ?>>Spain</option>
                <option value="Sri Lanka" <?php echo e(Auth::user()->country == 'Sri Lanka' ? 'selected' : ''); ?>>Sri Lanka</option>
                <option value="Sudan" <?php echo e(Auth::user()->country == 'Sudan' ? 'selected' : ''); ?>>Sudan</option>
                <option value="Suriname" <?php echo e(Auth::user()->country == 'Suriname' ? 'selected' : ''); ?>>Suriname</option>
                <option value="Sweden" <?php echo e(Auth::user()->country == 'Sweden' ? 'selected' : ''); ?>>Sweden</option>
                <option value="Switzerland" <?php echo e(Auth::user()->country == 'Switzerland' ? 'selected' : ''); ?>>Switzerland</option>
                <option value="Syrian Arab Republic" <?php echo e(Auth::user()->country == 'Syrian Arab Republic' ? 'selected' : ''); ?>>Syria</option>
                <option value="Taiwan" <?php echo e(Auth::user()->country == 'Taiwan' ? 'selected' : ''); ?>>Taiwan</option>
                <option value="Tajikistan" <?php echo e(Auth::user()->country == 'Tajikistan' ? 'selected' : ''); ?>>Tajikistan</option>
                <option value="Tanzania (United Republic of)" <?php echo e(Auth::user()->country == 'Tanzania (United Republic of)' ? 'selected' : ''); ?>>Tanzania</option>
                <option value="Thailand" <?php echo e(Auth::user()->country == 'Thailand' ? 'selected' : ''); ?>>Thailand</option>
                <option value="Timor-Leste" <?php echo e(Auth::user()->country == 'Timor-Leste' ? 'selected' : ''); ?>>Timor-Leste</option>
                <option value="Togo" <?php echo e(Auth::user()->country == 'Togo' ? 'selected' : ''); ?>>Togo</option>
                <option value="Tonga" <?php echo e(Auth::user()->country == 'Tonga' ? 'selected' : ''); ?>>Tonga</option>
                <option value="Trinidad and Tobago" <?php echo e(Auth::user()->country == 'Trinidad and Tobago' ? 'selected' : ''); ?>>Trinidad and Tobago</option>
                <option value="Tunisia" <?php echo e(Auth::user()->country == 'Tunisia' ? 'selected' : ''); ?>>Tunisia</option>
                <option value="Turkey" <?php echo e(Auth::user()->country == 'Turkey' ? 'selected' : ''); ?>>Turkey</option>
                <option value="Turkmenistan" <?php echo e(Auth::user()->country == 'Turkmenistan' ? 'selected' : ''); ?>>Turkmenistan</option>
                <option value="Tuvalu" <?php echo e(Auth::user()->country == 'Tuvalu' ? 'selected' : ''); ?>>Tuvalu</option>
                <option value="Uganda" <?php echo e(Auth::user()->country == 'Uganda' ? 'selected' : ''); ?>>Uganda</option>
                <option value="Ukraine" <?php echo e(Auth::user()->country == 'Ukraine' ? 'selected' : ''); ?>>Ukraine</option>
                <option value="United Arab Emirates" <?php echo e(Auth::user()->country == 'United Arab Emirates' ? 'selected' : ''); ?>>United Arab Emirates</option>
                <option value="United Kingdom of Great Britain and Northern Ireland" <?php echo e(Auth::user()->country == 'United Kingdom of Great Britain and Northern Ireland' ? 'selected' : ''); ?>>United Kingdom</option>
                <option value="United States of America" <?php echo e(Auth::user()->country == 'United States of America' ? 'selected' : ''); ?>>United States</option>
                <option value="Uruguay" <?php echo e(Auth::user()->country == 'Uruguay' ? 'selected' : ''); ?>>Uruguay</option>
                <option value="Uzbekistan" <?php echo e(Auth::user()->country == 'Uzbekistan' ? 'selected' : ''); ?>>Uzbekistan</option>
                <option value="Vanuatu" <?php echo e(Auth::user()->country == 'Vanuatu' ? 'selected' : ''); ?>>Vanuatu</option>
                <option value="Venezuela" <?php echo e(Auth::user()->country == 'Venezuela' ? 'selected' : ''); ?>>Venezuela</option>
                <option value="Viet Nam" <?php echo e(Auth::user()->country == 'Viet Nam' ? 'selected' : ''); ?>>Vietnam</option>
                <option value="Yemen" <?php echo e(Auth::user()->country == 'Yemen' ? 'selected' : ''); ?>>Yemen</option>
                <option value="Zambia" <?php echo e(Auth::user()->country == 'Zambia' ? 'selected' : ''); ?>>Zambia</option>
                <option value="Zimbabwe" <?php echo e(Auth::user()->country == 'Zimbabwe' ? 'selected' : ''); ?>>Zimbabwe</option>
                       </select>
                        <div class="invalid-feedback">Please select a country</div>
                    </div>
                </div>
            </div> <!-- / .row -->
            <div class="row mb-4">
                <div class="col-lg-3">
                    <label class="col-form-label">Username</label>
                </div>
                <div class="col-lg">
                    <input type="text" class="form-control" value="<?php echo e(Auth::user()->username); ?>" name="username" readonly>
                </div>
            </div> <!-- / .row -->
            <div class="d-flex justify-content-end mt-5">
                
                <button type="submit" class="btn btn-primary">
                    <div class="spinner-border spinner-border-sm" role="status">
                       
                    </div>
                    Save changes
                </button>
            </div>
        </div>
    </form>

</div>          </div>
</div>


<script>
    document.getElementById('updateprofileform').addEventListener('submit', function() {
        //alert('love');
        $.ajax({
            url: "<?php echo e(route('profile.update')); ?>",
            type: 'POST',
            data: $('#updateprofileform').serialize(),
            success: function(response) {
                if (response.status === 200) {
                    $.notify({
                        // options
                        icon: 'flaticon-alarm-1',
                        title: 'Success',
                        message: response.success,
                    }, {
                        // settings
                        type: 'success',
                        allow_dismiss: true,
                        newest_on_top: false,
                        showProgressbar: true,
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        offset: 20,
                        spacing: 10,
                        z_index: 1031,
                        delay: 5000,
                        timer: 1000,
                        url_target: '_blank',
                        mouse_over: null,
                        animate: {
                            enter: 'animated fadeInDown',
                            exit: 'animated fadeOutUp'
                        },

                    });
                } else {

                }
            },
            error: function(data's) {
                console.log(data);
            },

        });
    });
</script><?php /**PATH D:\xampp\htdocs\innovatex-broker\resources\views/profile/update-profile-information-form.blade.php ENDPATH**/ ?>