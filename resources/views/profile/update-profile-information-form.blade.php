<div class="col">
            <!-- Card -->
            <div class="card border-0 scroll-mt-3" id="basicInformationSection">
                <div class="card-header">
                    <h2 class="h3 mb-0">Basic information</h2>
                </div>

                <div >
                    <form method="POST" action="javascript:void(0)" id="updateprofileform">
                        @csrf
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="fullName" class="col-form-label">Full Name</label>
                </div>

                <div class="col-lg">
                    <input type="text" class="form-control" id="fullName" value="{{ Auth::user()->name }}" name="name" required>
                    <div class="invalid-feedback">Please add your full name</div>
                </div>
            </div> <!-- / .row -->

            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="phone" class="col-form-label">Phone</label>
                </div>

                <div class="col-lg">
                    <input type="text" class="form-control" id="phone" value="{{ Auth::user()->phone }}" name="phone" required>
                                    </div>
            </div> <!-- / .row -->

            <div class="row mb-4">
                <div class="col-lg-3">
                    <label for="emailAddress" class="col-form-label">Email address</label>
                </div>

                <div class="col-lg">
                    <input type="text" class="form-control" id="emailAddress" value="{{ Auth::user()->email }}" name="email" readonly>
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
                <option value="Afghanistan" {{ Auth::user()->country == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                <option value="Albania" {{ Auth::user()->country == 'Albania' ? 'selected' : '' }}>Albania</option>
                <option value="Algeria" {{ Auth::user()->country == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                <option value="Andorra" {{ Auth::user()->country == 'Andorra' ? 'selected' : '' }}>Andorra</option>
                <option value="Angola" {{ Auth::user()->country == 'Angola' ? 'selected' : '' }}>Angola</option>
                <option value="Antigua and Barbuda" {{ Auth::user()->country == 'Antigua and Barbuda' ? 'selected' : '' }}>Antigua and Barbuda</option>
                <option value="Argentina" {{ Auth::user()->country == 'Argentina' ? 'selected' : '' }}>Argentina</option>
                <option value="Armenia" {{ Auth::user()->country == 'Armenia' ? 'selected' : '' }}>Armenia</option>
                <option value="Australia" {{ Auth::user()->country == 'Australia' ? 'selected' : '' }}>Australia</option>
                <option value="Austria" {{ Auth::user()->country == 'Austria' ? 'selected' : '' }}>Austria</option>
                <option value="Azerbaijan" {{ Auth::user()->country == 'Azerbaijan' ? 'selected' : '' }}>Azerbaijan</option>
                <option value="Bahamas" {{ Auth::user()->country == 'Bahamas' ? 'selected' : '' }}>Bahamas</option>
                <option value="Bahrain" {{ Auth::user()->country == 'Bahrain' ? 'selected' : '' }}>Bahrain</option>
                <option value="Bangladesh" {{ Auth::user()->country == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                <option value="Barbados" {{ Auth::user()->country == 'Barbados' ? 'selected' : '' }}>Barbados</option>
                <option value="Belarus" {{ Auth::user()->country == 'Belarus' ? 'selected' : '' }}>Belarus</option>
                <option value="Belgium" {{ Auth::user()->country == 'Belgium' ? 'selected' : '' }}>Belgium</option>
                <option value="Belize" {{ Auth::user()->country == 'Belize' ? 'selected' : '' }}>Belize</option>
                <option value="Benin" {{ Auth::user()->country == 'Benin' ? 'selected' : '' }}>Benin</option>
                <option value="Bhutan" {{ Auth::user()->country == 'Bhutan' ? 'selected' : '' }}>Bhutan</option>
                <option value="Bolivia" {{ Auth::user()->country == 'Bolivia' ? 'selected' : '' }}>Bolivia</option>
                <option value="Bosnia and Herzegovina" {{ Auth::user()->country == 'Bosnia and Herzegovina' ? 'selected' : '' }}>Bosnia and Herzegovina</option>
                <option value="Botswana" {{ Auth::user()->country == 'Botswana' ? 'selected' : '' }}>Botswana</option>
                <option value="Brazil" {{ Auth::user()->country == 'Brazil' ? 'selected' : '' }}>Brazil</option>
                <option value="Brunei Darussalam" {{ Auth::user()->country == 'Brunei Darussalam' ? 'selected' : '' }}>Brunei Darussalam</option>
                <option value="Bulgaria" {{ Auth::user()->country == 'Bulgaria' ? 'selected' : '' }}>Bulgaria</option>
                <option value="Burkina Faso" {{ Auth::user()->country == 'Burkina Faso' ? 'selected' : '' }}>Burkina Faso</option>
                <option value="Burundi" {{ Auth::user()->country == 'Burundi' ? 'selected' : '' }}>Burundi</option>
                <option value="Cabo Verde" {{ Auth::user()->country == 'Cabo Verde' ? 'selected' : '' }}>Cabo Verde</option>
                <option value="Cambodia" {{ Auth::user()->country == 'Cambodia' ? 'selected' : '' }}>Cambodia</option>
                <option value="Cameroon" {{ Auth::user()->country == 'Cameroon' ? 'selected' : '' }}>Cameroon</option>
                <option value="Canada" {{ Auth::user()->country == 'Canada' ? 'selected' : '' }}>Canada</option>
                <option value="Central African Republic" {{ Auth::user()->country == 'Central African Republic' ? 'selected' : '' }}>Central African Republic</option>
                <option value="Chad" {{ Auth::user()->country == 'Chad' ? 'selected' : '' }}>Chad</option>
                <option value="Chile" {{ Auth::user()->country == 'Chile' ? 'selected' : '' }}>Chile</option>
                <option value="China" {{ Auth::user()->country == 'China' ? 'selected' : '' }}>China</option>
                <option value="Colombia" {{ Auth::user()->country == 'Colombia' ? 'selected' : '' }}>Colombia</option>
                <option value="Comoros" {{ Auth::user()->country == 'Comoros' ? 'selected' : '' }}>Comoros</option>
                <option value="Congo" {{ Auth::user()->country == 'Congo' ? 'selected' : '' }}>Congo</option>
                <option value="Costa Rica" {{ Auth::user()->country == 'Costa Rica' ? 'selected' : '' }}>Costa Rica</option>
                <option value="Croatia" {{ Auth::user()->country == 'Croatia' ? 'selected' : '' }}>Croatia</option>
                <option value="Cuba" {{ Auth::user()->country == 'Cuba' ? 'selected' : '' }}>Cuba</option>
                <option value="Cyprus" {{ Auth::user()->country == 'Cyprus' ? 'selected' : '' }}>Cyprus</option>
                <option value="Czech Republic" {{ Auth::user()->country == 'Czech Republic' ? 'selected' : '' }}>Czech Republic</option>
                <option value="Denmark" {{ Auth::user()->country == 'Denmark' ? 'selected' : '' }}>Denmark</option>
                <option value="Djibouti" {{ Auth::user()->country == 'Djibouti' ? 'selected' : '' }}>Djibouti</option>
                <option value="Dominica" {{ Auth::user()->country == 'Dominica' ? 'selected' : '' }}>Dominica</option>
                <option value="Dominican Republic" {{ Auth::user()->country == 'Dominican Republic' ? 'selected' : '' }}>Dominican Republic</option>
                <option value="Ecuador" {{ Auth::user()->country == 'Ecuador' ? 'selected' : '' }}>Ecuador</option>
                <option value="Egypt" {{ Auth::user()->country == 'Egypt' ? 'selected' : '' }}>Egypt</option>
                <option value="El Salvador" {{ Auth::user()->country == 'El Salvador' ? 'selected' : '' }}>El Salvador</option>
                <option value="Equatorial Guinea" {{ Auth::user()->country == 'Equatorial Guinea' ? 'selected' : '' }}>Equatorial Guinea</option>
                <option value="Eritrea" {{ Auth::user()->country == 'Eritrea' ? 'selected' : '' }}>Eritrea</option>
                <option value="Estonia" {{ Auth::user()->country == 'Estonia' ? 'selected' : '' }}>Estonia</option>
                <option value="Eswatini" {{ Auth::user()->country == 'Eswatini' ? 'selected' : '' }}>Eswatini</option>
                <option value="Ethiopia" {{ Auth::user()->country == 'Ethiopia' ? 'selected' : '' }}>Ethiopia</option>
                <option value="Fiji" {{ Auth::user()->country == 'Fiji' ? 'selected' : '' }}>Fiji</option>
                <option value="Finland" {{ Auth::user()->country == 'Finland' ? 'selected' : '' }}>Finland</option>
                <option value="France" {{ Auth::user()->country == 'France' ? 'selected' : '' }}>France</option>
                <option value="Gabon" {{ Auth::user()->country == 'Gabon' ? 'selected' : '' }}>Gabon</option>
                <option value="Gambia" {{ Auth::user()->country == 'Gambia' ? 'selected' : '' }}>Gambia</option>
                <option value="Georgia" {{ Auth::user()->country == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                <option value="Germany" {{ Auth::user()->country == 'Germany' ? 'selected' : '' }}>Germany</option>
                <option value="Ghana" {{ Auth::user()->country == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                <option value="Greece" {{ Auth::user()->country == 'Greece' ? 'selected' : '' }}>Greece</option>
                <option value="Grenada" {{ Auth::user()->country == 'Grenada' ? 'selected' : '' }}>Grenada</option>
                <option value="Guatemala" {{ Auth::user()->country == 'Guatemala' ? 'selected' : '' }}>Guatemala</option>
                <option value="Guinea" {{ Auth::user()->country == 'Guinea' ? 'selected' : '' }}>Guinea</option>
                <option value="Guinea-Bissau" {{ Auth::user()->country == 'Guinea-Bissau' ? 'selected' : '' }}>Guinea-Bissau</option>
                <option value="Guyana" {{ Auth::user()->country == 'Guyana' ? 'selected' : '' }}>Guyana</option>
                <option value="Haiti" {{ Auth::user()->country == 'Haiti' ? 'selected' : '' }}>Haiti</option>
                <option value="Honduras" {{ Auth::user()->country == 'Honduras' ? 'selected' : '' }}>Honduras</option>
                <option value="Hungary" {{ Auth::user()->country == 'Hungary' ? 'selected' : '' }}>Hungary</option>
                <option value="Iceland" {{ Auth::user()->country == 'Iceland' ? 'selected' : '' }}>Iceland</option>
                <option value="India" {{ Auth::user()->country == 'India' ? 'selected' : '' }}>India</option>
                <option value="Indonesia" {{ Auth::user()->country == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                <option value="Iran" {{ Auth::user()->country == 'Iran' ? 'selected' : '' }}>Iran</option>
                <option value="Iraq" {{ Auth::user()->country == 'Iraq' ? 'selected' : '' }}>Iraq</option>
                <option value="Ireland" {{ Auth::user()->country == 'Ireland' ? 'selected' : '' }}>Ireland</option>
                <option value="Israel" {{ Auth::user()->country == 'Israel' ? 'selected' : '' }}>Israel</option>
                <option value="Italy" {{ Auth::user()->country == 'Italy' ? 'selected' : '' }}>Italy</option>
                <option value="Jamaica" {{ Auth::user()->country == 'Jamaica' ? 'selected' : '' }}>Jamaica</option>
                <option value="Japan" {{ Auth::user()->country == 'Japan' ? 'selected' : '' }}>Japan</option>
                <option value="Jordan" {{ Auth::user()->country == 'Jordan' ? 'selected' : '' }}>Jordan</option>
                <option value="Kazakhstan" {{ Auth::user()->country == 'Kazakhstan' ? 'selected' : '' }}>Kazakhstan</option>
                <option value="Kenya" {{ Auth::user()->country == 'Kenya' ? 'selected' : '' }}>Kenya</option>
                <option value="Kiribati" {{ Auth::user()->country == 'Kiribati' ? 'selected' : '' }}>Kiribati</option>
                <option value="Korea, Democratic People's Republic of" {{ Auth::user()->country == 'Korea, Democratic People\'s Republic of' ? 'selected' : '' }}>North Korea</option>
                <option value="Korea, Republic of" {{ Auth::user()->country == 'Korea, Republic of' ? 'selected' : '' }}>South Korea</option>
                <option value="Kuwait" {{ Auth::user()->country == 'Kuwait' ? 'selected' : '' }}>Kuwait</option>
                <option value="Kyrgyzstan" {{ Auth::user()->country == 'Kyrgyzstan' ? 'selected' : '' }}>Kyrgyzstan</option>
                <option value="Laos" {{ Auth::user()->country == 'Laos' ? 'selected' : '' }}>Laos</option>
                <option value="Latvia" {{ Auth::user()->country == 'Latvia' ? 'selected' : '' }}>Latvia</option>
                <option value="Lebanon" {{ Auth::user()->country == 'Lebanon' ? 'selected' : '' }}>Lebanon</option>
                <option value="Lesotho" {{ Auth::user()->country == 'Lesotho' ? 'selected' : '' }}>Lesotho</option>
                <option value="Liberia" {{ Auth::user()->country == 'Liberia' ? 'selected' : '' }}>Liberia</option>
                <option value="Libya" {{ Auth::user()->country == 'Libya' ? 'selected' : '' }}>Libya</option>
                <option value="Liechtenstein" {{ Auth::user()->country == 'Liechtenstein' ? 'selected' : '' }}>Liechtenstein</option>
                <option value="Lithuania" {{ Auth::user()->country == 'Lithuania' ? 'selected' : '' }}>Lithuania</option>
                <option value="Luxembourg" {{ Auth::user()->country == 'Luxembourg' ? 'selected' : '' }}>Luxembourg</option>
                <option value="Madagascar" {{ Auth::user()->country == 'Madagascar' ? 'selected' : '' }}>Madagascar</option>
                <option value="Malawi" {{ Auth::user()->country == 'Malawi' ? 'selected' : '' }}>Malawi</option>
                <option value="Malaysia" {{ Auth::user()->country == 'Malaysia' ? 'selected' : '' }}>Malaysia</option>
                <option value="Maldives" {{ Auth::user()->country == 'Maldives' ? 'selected' : '' }}>Maldives</option>
                <option value="Mali" {{ Auth::user()->country == 'Mali' ? 'selected' : '' }}>Mali</option>
                <option value="Malta" {{ Auth::user()->country == 'Malta' ? 'selected' : '' }}>Malta</option>
                <option value="Marshall Islands" {{ Auth::user()->country == 'Marshall Islands' ? 'selected' : '' }}>Marshall Islands</option>
                <option value="Mauritania" {{ Auth::user()->country == 'Mauritania' ? 'selected' : '' }}>Mauritania</option>
                <option value="Mauritius" {{ Auth::user()->country == 'Mauritius' ? 'selected' : '' }}>Mauritius</option>
                <option value="Mexico" {{ Auth::user()->country == 'Mexico' ? 'selected' : '' }}>Mexico</option>
                <option value="Micronesia (Federated States of)" {{ Auth::user()->country == 'Micronesia (Federated States of)' ? 'selected' : '' }}>Micronesia</option>
                <option value="Moldova (Republic of)" {{ Auth::user()->country == 'Moldova (Republic of)' ? 'selected' : '' }}>Moldova</option>
                <option value="Monaco" {{ Auth::user()->country == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                <option value="Mongolia" {{ Auth::user()->country == 'Mongolia' ? 'selected' : '' }}>Mongolia</option>
                <option value="Montenegro" {{ Auth::user()->country == 'Montenegro' ? 'selected' : '' }}>Montenegro</option>
                <option value="Morocco" {{ Auth::user()->country == 'Morocco' ? 'selected' : '' }}>Morocco</option>
                <option value="Mozambique" {{ Auth::user()->country == 'Mozambique' ? 'selected' : '' }}>Mozambique</option>
                <option value="Myanmar" {{ Auth::user()->country == 'Myanmar' ? 'selected' : '' }}>Myanmar</option>
                <option value="Namibia" {{ Auth::user()->country == 'Namibia' ? 'selected' : '' }}>Namibia</option>
                <option value="Nauru" {{ Auth::user()->country == 'Nauru' ? 'selected' : '' }}>Nauru</option>
                <option value="Nepal" {{ Auth::user()->country == 'Nepal' ? 'selected' : '' }}>Nepal</option>
                <option value="Netherlands" {{ Auth::user()->country == 'Netherlands' ? 'selected' : '' }}>Netherlands</option>
                <option value="New Zealand" {{ Auth::user()->country == 'New Zealand' ? 'selected' : '' }}>New Zealand</option>
                <option value="Nicaragua" {{ Auth::user()->country == 'Nicaragua' ? 'selected' : '' }}>Nicaragua</option>
                <option value="Niger" {{ Auth::user()->country == 'Niger' ? 'selected' : '' }}>Niger</option>
                <option value="Nigeria" {{ Auth::user()->country == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                <option value="North Macedonia" {{ Auth::user()->country == 'North Macedonia' ? 'selected' : '' }}>North Macedonia</option>
                <option value="Norway" {{ Auth::user()->country == 'Norway' ? 'selected' : '' }}>Norway</option>
                <option value="Oman" {{ Auth::user()->country == 'Oman' ? 'selected' : '' }}>Oman</option>
                <option value="Pakistan" {{ Auth::user()->country == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                <option value="Palau" {{ Auth::user()->country == 'Palau' ? 'selected' : '' }}>Palau</option>
                <option value="Panama" {{ Auth::user()->country == 'Panama' ? 'selected' : '' }}>Panama</option>
                <option value="Papua New Guinea" {{ Auth::user()->country == 'Papua New Guinea' ? 'selected' : '' }}>Papua New Guinea</option>
                <option value="Paraguay" {{ Auth::user()->country == 'Paraguay' ? 'selected' : '' }}>Paraguay</option>
                <option value="Peru" {{ Auth::user()->country == 'Peru' ? 'selected' : '' }}>Peru</option>
                <option value="Philippines" {{ Auth::user()->country == 'Philippines' ? 'selected' : '' }}>Philippines</option>
                <option value="Poland" {{ Auth::user()->country == 'Poland' ? 'selected' : '' }}>Poland</option>
                <option value="Portugal" {{ Auth::user()->country == 'Portugal' ? 'selected' : '' }}>Portugal</option>
                <option value="Qatar" {{ Auth::user()->country == 'Qatar' ? 'selected' : '' }}>Qatar</option>
                <option value="Romania" {{ Auth::user()->country == 'Romania' ? 'selected' : '' }}>Romania</option>
                <option value="Russia" {{ Auth::user()->country == 'Russia' ? 'selected' : '' }}>Russia</option>
                <option value="Rwanda" {{ Auth::user()->country == 'Rwanda' ? 'selected' : '' }}>Rwanda</option>
                <option value="Saint Kitts and Nevis" {{ Auth::user()->country == 'Saint Kitts and Nevis' ? 'selected' : '' }}>Saint Kitts and Nevis</option>
                <option value="Saint Lucia" {{ Auth::user()->country == 'Saint Lucia' ? 'selected' : '' }}>Saint Lucia</option>
                <option value="Saint Vincent and the Grenadines" {{ Auth::user()->country == 'Saint Vincent and the Grenadines' ? 'selected' : '' }}>Saint Vincent and the Grenadines</option>
                <option value="Samoa" {{ Auth::user()->country == 'Samoa' ? 'selected' : '' }}>Samoa</option>
                <option value="San Marino" {{ Auth::user()->country == 'San Marino' ? 'selected' : '' }}>San Marino</option>
                <option value="Sao Tome and Principe" {{ Auth::user()->country == 'Sao Tome and Principe' ? 'selected' : '' }}>Sao Tome and Principe</option>
                <option value="Saudi Arabia" {{ Auth::user()->country == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia</option>
                <option value="Senegal" {{ Auth::user()->country == 'Senegal' ? 'selected' : '' }}>Senegal</option>
                <option value="Serbia" {{ Auth::user()->country == 'Serbia' ? 'selected' : '' }}>Serbia</option>
                <option value="Seychelles" {{ Auth::user()->country == 'Seychelles' ? 'selected' : '' }}>Seychelles</option>
                <option value="Sierra Leone" {{ Auth::user()->country == 'Sierra Leone' ? 'selected' : '' }}>Sierra Leone</option>
                <option value="Singapore" {{ Auth::user()->country == 'Singapore' ? 'selected' : '' }}>Singapore</option>
                <option value="Slovakia" {{ Auth::user()->country == 'Slovakia' ? 'selected' : '' }}>Slovakia</option>
                <option value="Slovenia" {{ Auth::user()->country == 'Slovenia' ? 'selected' : '' }}>Slovenia</option>
                <option value="Solomon Islands" {{ Auth::user()->country == 'Solomon Islands' ? 'selected' : '' }}>Solomon Islands</option>
                <option value="Somalia" {{ Auth::user()->country == 'Somalia' ? 'selected' : '' }}>Somalia</option>
                <option value="South Africa" {{ Auth::user()->country == 'South Africa' ? 'selected' : '' }}>South Africa</option>
                <option value="South Sudan" {{ Auth::user()->country == 'South Sudan' ? 'selected' : '' }}>South Sudan</option>
                <option value="Spain" {{ Auth::user()->country == 'Spain' ? 'selected' : '' }}>Spain</option>
                <option value="Sri Lanka" {{ Auth::user()->country == 'Sri Lanka' ? 'selected' : '' }}>Sri Lanka</option>
                <option value="Sudan" {{ Auth::user()->country == 'Sudan' ? 'selected' : '' }}>Sudan</option>
                <option value="Suriname" {{ Auth::user()->country == 'Suriname' ? 'selected' : '' }}>Suriname</option>
                <option value="Sweden" {{ Auth::user()->country == 'Sweden' ? 'selected' : '' }}>Sweden</option>
                <option value="Switzerland" {{ Auth::user()->country == 'Switzerland' ? 'selected' : '' }}>Switzerland</option>
                <option value="Syrian Arab Republic" {{ Auth::user()->country == 'Syrian Arab Republic' ? 'selected' : '' }}>Syria</option>
                <option value="Taiwan" {{ Auth::user()->country == 'Taiwan' ? 'selected' : '' }}>Taiwan</option>
                <option value="Tajikistan" {{ Auth::user()->country == 'Tajikistan' ? 'selected' : '' }}>Tajikistan</option>
                <option value="Tanzania (United Republic of)" {{ Auth::user()->country == 'Tanzania (United Republic of)' ? 'selected' : '' }}>Tanzania</option>
                <option value="Thailand" {{ Auth::user()->country == 'Thailand' ? 'selected' : '' }}>Thailand</option>
                <option value="Timor-Leste" {{ Auth::user()->country == 'Timor-Leste' ? 'selected' : '' }}>Timor-Leste</option>
                <option value="Togo" {{ Auth::user()->country == 'Togo' ? 'selected' : '' }}>Togo</option>
                <option value="Tonga" {{ Auth::user()->country == 'Tonga' ? 'selected' : '' }}>Tonga</option>
                <option value="Trinidad and Tobago" {{ Auth::user()->country == 'Trinidad and Tobago' ? 'selected' : '' }}>Trinidad and Tobago</option>
                <option value="Tunisia" {{ Auth::user()->country == 'Tunisia' ? 'selected' : '' }}>Tunisia</option>
                <option value="Turkey" {{ Auth::user()->country == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                <option value="Turkmenistan" {{ Auth::user()->country == 'Turkmenistan' ? 'selected' : '' }}>Turkmenistan</option>
                <option value="Tuvalu" {{ Auth::user()->country == 'Tuvalu' ? 'selected' : '' }}>Tuvalu</option>
                <option value="Uganda" {{ Auth::user()->country == 'Uganda' ? 'selected' : '' }}>Uganda</option>
                <option value="Ukraine" {{ Auth::user()->country == 'Ukraine' ? 'selected' : '' }}>Ukraine</option>
                <option value="United Arab Emirates" {{ Auth::user()->country == 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
                <option value="United Kingdom of Great Britain and Northern Ireland" {{ Auth::user()->country == 'United Kingdom of Great Britain and Northern Ireland' ? 'selected' : '' }}>United Kingdom</option>
                <option value="United States of America" {{ Auth::user()->country == 'United States of America' ? 'selected' : '' }}>United States</option>
                <option value="Uruguay" {{ Auth::user()->country == 'Uruguay' ? 'selected' : '' }}>Uruguay</option>
                <option value="Uzbekistan" {{ Auth::user()->country == 'Uzbekistan' ? 'selected' : '' }}>Uzbekistan</option>
                <option value="Vanuatu" {{ Auth::user()->country == 'Vanuatu' ? 'selected' : '' }}>Vanuatu</option>
                <option value="Venezuela" {{ Auth::user()->country == 'Venezuela' ? 'selected' : '' }}>Venezuela</option>
                <option value="Viet Nam" {{ Auth::user()->country == 'Viet Nam' ? 'selected' : '' }}>Vietnam</option>
                <option value="Yemen" {{ Auth::user()->country == 'Yemen' ? 'selected' : '' }}>Yemen</option>
                <option value="Zambia" {{ Auth::user()->country == 'Zambia' ? 'selected' : '' }}>Zambia</option>
                <option value="Zimbabwe" {{ Auth::user()->country == 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe</option>
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
                    <input type="text" class="form-control" value="{{ Auth::user()->username }}" name="username" readonly>
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
            url: "{{ route('profile.update') }}",
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
</script>