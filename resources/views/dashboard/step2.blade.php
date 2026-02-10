<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Affordableinvprogram | Complete Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Complete your Affordableinvprogram profile" name="description" />
    <link rel="icon" type="image/png" href="{{ asset('logo1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('auth/style.css') }}" rel="stylesheet">
</head>
<body class="auth-page">

    <div class="auth-wrapper">
        <!-- Left Branding Panel -->
        <div class="auth-brand-panel">
            <div class="auth-brand-content">
                <a href="/"><img src="{{ asset('logo1.png') }}" alt="Affordableinvprogram" class="auth-logo-img"></a>
                <h2 class="auth-brand-title">Almost There!</h2>
                <p class="auth-brand-subtitle">Complete your profile to unlock full access to copy trading, deposits, withdrawals, and your personal dashboard.</p>
                <div class="auth-brand-features">
                    <div class="auth-brand-feature"><i class="fas fa-shield-alt"></i> Required for account security</div>
                    <div class="auth-brand-feature"><i class="fas fa-bolt"></i> Enables instant withdrawals</div>
                    <div class="auth-brand-feature"><i class="fas fa-globe"></i> Complies with KYC regulations</div>
                    <div class="auth-brand-feature"><i class="fas fa-lock"></i> Your data is encrypted & secure</div>
                </div>
                <div class="auth-brand-stats">
                    <div class="auth-brand-stat"><span>150K+</span>Traders</div>
                    <div class="auth-brand-stat"><span>120+</span>Countries</div>
                    <div class="auth-brand-stat"><span>$2.8B+</span>Volume</div>
                </div>
            </div>
        </div>

        <!-- Right Form Panel -->
        <div class="auth-form-panel">
            <div class="auth-form-container">
                <a href="/" class="auth-mobile-logo"><img src="{{ asset('logo1.png') }}" alt="Logo" height="40"></a>

                <!-- Step Progress -->
                <div class="auth-steps">
                    <div class="auth-step completed">
                        <div class="auth-step-num"><i class="fas fa-check" style="font-size:0.7rem"></i></div>
                        <span class="auth-step-label">Account</span>
                    </div>
                    <div class="auth-step-line done"></div>
                    <div class="auth-step active">
                        <div class="auth-step-num">2</div>
                        <span class="auth-step-label">Details</span>
                    </div>
                    <div class="auth-step-line"></div>
                    <div class="auth-step">
                        <div class="auth-step-num">3</div>
                        <span class="auth-step-label">Verify</span>
                    </div>
                </div>

                <div class="auth-form-header">
                    <h3 class="auth-form-title">Your Personal Details</h3>
                    <p class="auth-form-subtitle">Please complete all fields to continue</p>
                </div>

                <form method="POST" action="{{ route('step2') }}" id="regester" class="auth-form" novalidate>
                    @csrf

                    <div class="auth-field">
                        <label class="auth-label"><i class="fas fa-globe"></i> Country</label>
                        <select class="auth-input auth-select" id="country" name="country" required>
                            <option value="">Select your country</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Korea, Republic of">South Korea</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Moldova, Republic of">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Taiwan, Province of China">Taiwan</option>
                            <option value="Tanzania, United Republic of">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Vietnam</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>

                    <div class="auth-field">
                        <label class="auth-label"><i class="fas fa-map-marker-alt"></i> State / Province</label>
                        <input type="text" class="auth-input" id="state" name="state" placeholder="Enter your state" required>
                    </div>

                    <div class="auth-field">
                        <label class="auth-label"><i class="fas fa-mailbox"></i> Post Code</label>
                        <input type="text" class="auth-input" id="pcode" name="pcode" placeholder="Enter your post code" required>
                    </div>

                    <div class="auth-field">
                        <label class="auth-label"><i class="fas fa-home"></i> Address</label>
                        <input type="text" class="auth-input" id="address" name="address" placeholder="Enter your street address" required>
                    </div>

                    <div class="auth-field">
                        <label class="auth-label"><i class="fas fa-phone"></i> Mobile Number</label>
                        <input type="tel" class="auth-input" id="phone" name="phone" placeholder="Enter your mobile number" required>
                    </div>

                    <button type="submit" class="auth-submit-btn" onclick="create(this)">
                        <i class="fas fa-arrow-right me-2"></i> Continue
                    </button>

                    <p class="response"></p>
                </form>

                <div class="auth-footer">
                    <p>&copy; <script>document.write(new Date().getFullYear())</script> Affordableinvprogram. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
    function create(id) {
        id.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Saving...';
        setTimeout(function() { id.innerHTML = '<i class="fas fa-arrow-right me-2"></i> Continue'; }, 3000);
    }
    </script>
</body>
</html>
