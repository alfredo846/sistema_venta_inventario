@extends('layouts.main')

@section('title', 'Forms')

	@section('head')
    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{ asset('assets\plugins\pace\pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets\plugins\pace\pace.min.js') }}"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{ asset('assets\css\demo\nifty-demo.min.css') }}" rel="stylesheet">


        
    <!--Switchery [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\switchery\switchery.min.css') }}" rel="stylesheet">


    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\bootstrap-select\bootstrap-select.min.css') }}" rel="stylesheet">


    <!--Bootstrap Tags Input [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\bootstrap-tagsinput\bootstrap-tagsinput.min.css') }}" rel="stylesheet">


    <!--Chosen [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\chosen\chosen.min.css') }}" rel="stylesheet">


    <!--noUiSlider [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\noUiSlider\nouislider.min.css') }}" rel="stylesheet">


    <!--Select2 [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\select2\css\select2.min.css') }}" rel="stylesheet">


    <!--Bootstrap Timepicker [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\bootstrap-timepicker\bootstrap-timepicker.min.css') }}" rel="stylesheet">


    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\bootstrap-datepicker\bootstrap-datepicker.min.css') }}" rel="stylesheet">
	@endsection



	@section('content')
    <!-- {{ dump(request()->path()) }} -->
    <div id="content-container">
                <div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Advanced Form Elements</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
					<li><a href="#"><i class="demo-pli-home"></i></a></li>
					<li><a href="#">Forms</a></li>
					<li class="active">Advanced Form Elements</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
					            <div class="row">
					                <div class="col-lg-6">
					                    <div class="panel">
					                        <div class="panel-heading">
					                            <h3 class="panel-title">Bootstrap Tags Input</h3>
					                        </div>
					                        <div class="panel-body">
					                            <p>jQuery plugin providing a Twitter Bootstrap user interface for managing tags</p><br>
					
					                            <!-- Bootstrap Tags Input -->
					                            <!--===================================================-->
					                            <input type="text" class="form-control" placeholder="Type to add a tag" value="Sport, Movie, Documents, Video" data-role="tagsinput">
					                            <!--===================================================-->
					
					                        </div>
					                    </div>
					                    <div class="panel">
					                        <div class="panel-heading">
					                            <h3 class="panel-title">Chosen</h3>
					                        </div>
					                        <div class="panel-body">
					                            <p class="text-main text-bold mar-no">Standart Select</p>
					                            <p>Chosen is a jQuery plugin that makes long, unwieldy select boxes much more user-friendly.</p>
					
					
					                            <!-- Default choosen -->
					                            <!--===================================================-->
					                            <select data-placeholder="Choose a Country..." id="demo-chosen-select" tabindex="2">
					                                <option value="United States">United States</option>
					                                <option value="United Kingdom">United Kingdom</option>
					                                <option value="Afghanistan">Afghanistan</option>
					                                <option value="Aland Islands">Aland Islands</option>
					                                <option value="Albania">Albania</option>
					                                <option value="Algeria">Algeria</option>
					                                <option value="American Samoa">American Samoa</option>
					                                <option value="Andorra">Andorra</option>
					                                <option value="Angola">Angola</option>
					                                <option value="Anguilla">Anguilla</option>
					                                <option value="Antarctica">Antarctica</option>
					                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
					                                <option value="Argentina">Argentina</option>
					                                <option value="Armenia">Armenia</option>
					                                <option value="Aruba">Aruba</option>
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
					                                <option value="Bermuda">Bermuda</option>
					                                <option value="Bhutan">Bhutan</option>
					                                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
					                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
					                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
					                                <option value="Botswana">Botswana</option>
					                                <option value="Bouvet Island">Bouvet Island</option>
					                                <option value="Brazil">Brazil</option>
					                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
					                                <option value="Brunei Darussalam">Brunei Darussalam</option>
					                                <option value="Bulgaria">Bulgaria</option>
					                                <option value="Burkina Faso">Burkina Faso</option>
					                                <option value="Burundi">Burundi</option>
					                                <option value="Cambodia">Cambodia</option>
					                                <option value="Cameroon">Cameroon</option>
					                                <option value="Canada">Canada</option>
					                                <option value="Cape Verde">Cape Verde</option>
					                                <option value="Cayman Islands">Cayman Islands</option>
					                                <option value="Central African Republic">Central African Republic</option>
					                                <option value="Chad">Chad</option>
					                                <option value="Chile">Chile</option>
					                                <option value="China">China</option>
					                                <option value="Christmas Island">Christmas Island</option>
					                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
					                                <option value="Colombia">Colombia</option>
					                                <option value="Comoros">Comoros</option>
					                                <option value="Congo">Congo</option>
					                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
					                                <option value="Cook Islands">Cook Islands</option>
					                                <option value="Costa Rica">Costa Rica</option>
					                                <option value="Cote D&apos;ivoire">Cote D\'ivoire</option>
					                                <option value="Croatia">Croatia</option>
					                                <option value="Cuba">Cuba</option>
					                                <option value="Curacao">Curacao</option>
					                                <option value="Cyprus">Cyprus</option>
					                                <option value="Czech Republic">Czech Republic</option>
					                                <option value="Denmark">Denmark</option>
					                                <option value="Djibouti">Djibouti</option>
					                                <option value="Dominica">Dominica</option>
					                                <option value="Dominican Republic">Dominican Republic</option>
					                                <option value="Ecuador">Ecuador</option>
					                                <option value="Egypt">Egypt</option>
					                                <option value="El Salvador">El Salvador</option>
					                                <option value="Equatorial Guinea">Equatorial Guinea</option>
					                                <option value="Eritrea">Eritrea</option>
					                                <option value="Estonia">Estonia</option>
					                                <option value="Ethiopia">Ethiopia</option>
					                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
					                                <option value="Faroe Islands">Faroe Islands</option>
					                                <option value="Fiji">Fiji</option>
					                                <option value="Finland">Finland</option>
					                                <option value="France">France</option>
					                                <option value="French Guiana">French Guiana</option>
					                                <option value="French Polynesia">French Polynesia</option>
					                                <option value="French Southern Territories">French Southern Territories</option>
					                                <option value="Gabon">Gabon</option>
					                                <option value="Gambia">Gambia</option>
					                                <option value="Georgia">Georgia</option>
					                                <option value="Germany">Germany</option>
					                                <option value="Ghana">Ghana</option>
					                                <option value="Gibraltar">Gibraltar</option>
					                                <option value="Greece">Greece</option>
					                                <option value="Greenland">Greenland</option>
					                                <option value="Grenada">Grenada</option>
					                                <option value="Guadeloupe">Guadeloupe</option>
					                                <option value="Guam">Guam</option>
					                                <option value="Guatemala">Guatemala</option>
					                                <option value="Guernsey">Guernsey</option>
					                                <option value="Guinea">Guinea</option>
					                                <option value="Guinea-bissau">Guinea-bissau</option>
					                                <option value="Guyana">Guyana</option>
					                                <option value="Haiti">Haiti</option>
					                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
					                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
					                                <option value="Honduras">Honduras</option>
					                                <option value="Hong Kong">Hong Kong</option>
					                                <option value="Hungary">Hungary</option>
					                                <option value="Iceland">Iceland</option>
					                                <option value="India">India</option>
					                                <option value="Indonesia">Indonesia</option>
					                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
					                                <option value="Iraq">Iraq</option>
					                                <option value="Ireland">Ireland</option>
					                                <option value="Isle of Man">Isle of Man</option>
					                                <option value="Israel">Israel</option>
					                                <option value="Italy">Italy</option>
					                                <option value="Jamaica">Jamaica</option>
					                                <option value="Japan">Japan</option>
					                                <option value="Jersey">Jersey</option>
					                                <option value="Jordan">Jordan</option>
					                                <option value="Kazakhstan">Kazakhstan</option>
					                                <option value="Kenya">Kenya</option>
					                                <option value="Kiribati">Kiribati</option>
					                                <option value="Korea, Democratic People&apos;s Republic of">Korea, Democratic People\'s Republic of</option>
					                                <option value="Korea, Republic of">Korea, Republic of</option>
					                                <option value="Kuwait">Kuwait</option>
					                                <option value="Kyrgyzstan">Kyrgyzstan</option>
					                                <option value="Lao People&apos;s Democratic Republic">Lao People\'s Democratic Republic</option>
					                                <option value="Latvia">Latvia</option>
					                                <option value="Lebanon">Lebanon</option>
					                                <option value="Lesotho">Lesotho</option>
					                                <option value="Liberia">Liberia</option>
					                                <option value="Libya">Libya</option>
					                                <option value="Liechtenstein">Liechtenstein</option>
					                                <option value="Lithuania">Lithuania</option>
					                                <option value="Luxembourg">Luxembourg</option>
					                                <option value="Macao">Macao</option>
					                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
					                                <option value="Madagascar">Madagascar</option>
					                                <option value="Malawi">Malawi</option>
					                                <option value="Malaysia">Malaysia</option>
					                                <option value="Maldives">Maldives</option>
					                                <option value="Mali">Mali</option>
					                                <option value="Malta">Malta</option>
					                                <option value="Marshall Islands">Marshall Islands</option>
					                                <option value="Martinique">Martinique</option>
					                                <option value="Mauritania">Mauritania</option>
					                                <option value="Mauritius">Mauritius</option>
					                                <option value="Mayotte">Mayotte</option>
					                                <option value="Mexico">Mexico</option>
					                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
					                                <option value="Moldova, Republic of">Moldova, Republic of</option>
					                                <option value="Monaco">Monaco</option>
					                                <option value="Mongolia">Mongolia</option>
					                                <option value="Montenegro">Montenegro</option>
					                                <option value="Montserrat">Montserrat</option>
					                                <option value="Morocco">Morocco</option>
					                                <option value="Mozambique">Mozambique</option>
					                                <option value="Myanmar">Myanmar</option>
					                                <option value="Namibia">Namibia</option>
					                                <option value="Nauru">Nauru</option>
					                                <option value="Nepal">Nepal</option>
					                                <option value="Netherlands">Netherlands</option>
					                                <option value="New Caledonia">New Caledonia</option>
					                                <option value="New Zealand">New Zealand</option>
					                                <option value="Nicaragua">Nicaragua</option>
					                                <option value="Niger">Niger</option>
					                                <option value="Nigeria">Nigeria</option>
					                                <option value="Niue">Niue</option>
					                                <option value="Norfolk Island">Norfolk Island</option>
					                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
					                                <option value="Norway">Norway</option>
					                                <option value="Oman">Oman</option>
					                                <option value="Pakistan">Pakistan</option>
					                                <option value="Palau">Palau</option>
					                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
					                                <option value="Panama">Panama</option>
					                                <option value="Papua New Guinea">Papua New Guinea</option>
					                                <option value="Paraguay">Paraguay</option>
					                                <option value="Peru">Peru</option>
					                                <option value="Philippines">Philippines</option>
					                                <option value="Pitcairn">Pitcairn</option>
					                                <option value="Poland">Poland</option>
					                                <option value="Portugal">Portugal</option>
					                                <option value="Puerto Rico">Puerto Rico</option>
					                                <option value="Qatar">Qatar</option>
					                                <option value="Reunion">Reunion</option>
					                                <option value="Romania">Romania</option>
					                                <option value="Russian Federation">Russian Federation</option>
					                                <option value="Rwanda">Rwanda</option>
					                                <option value="Saint Barthelemy">Saint Barthelemy</option>
					                                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
					                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
					                                <option value="Saint Lucia">Saint Lucia</option>
					                                <option value="Saint Martin (French part)">Saint Martin (French part)</option>
					                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
					                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
					                                <option value="Samoa">Samoa</option>
					                                <option value="San Marino">San Marino</option>
					                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
					                                <option value="Saudi Arabia">Saudi Arabia</option>
					                                <option value="Senegal">Senegal</option>
					                                <option value="Serbia">Serbia</option>
					                                <option value="Seychelles">Seychelles</option>
					                                <option value="Sierra Leone">Sierra Leone</option>
					                                <option value="Singapore">Singapore</option>
					                                <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
					                                <option value="Slovakia">Slovakia</option>
					                                <option value="Slovenia">Slovenia</option>
					                                <option value="Solomon Islands">Solomon Islands</option>
					                                <option value="Somalia">Somalia</option>
					                                <option value="South Africa">South Africa</option>
					                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
					                                <option value="South Sudan">South Sudan</option>
					                                <option value="Spain">Spain</option>
					                                <option value="Sri Lanka">Sri Lanka</option>
					                                <option value="Sudan">Sudan</option>
					                                <option value="Suriname">Suriname</option>
					                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
					                                <option value="Swaziland">Swaziland</option>
					                                <option value="Sweden">Sweden</option>
					                                <option value="Switzerland">Switzerland</option>
					                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
					                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
					                                <option value="Tajikistan">Tajikistan</option>
					                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
					                                <option value="Thailand">Thailand</option>
					                                <option value="Timor-leste">Timor-leste</option>
					                                <option value="Togo">Togo</option>
					                                <option value="Tokelau">Tokelau</option>
					                                <option value="Tonga">Tonga</option>
					                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
					                                <option value="Tunisia">Tunisia</option>
					                                <option value="Turkey">Turkey</option>
					                                <option value="Turkmenistan">Turkmenistan</option>
					                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
					                                <option value="Tuvalu">Tuvalu</option>
					                                <option value="Uganda">Uganda</option>
					                                <option value="Ukraine">Ukraine</option>
					                                <option value="United Arab Emirates">United Arab Emirates</option>
					                                <option value="United Kingdom">United Kingdom</option>
					                                <option value="United States">United States</option>
					                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
					                                <option value="Uruguay">Uruguay</option>
					                                <option value="Uzbekistan">Uzbekistan</option>
					                                <option value="Vanuatu">Vanuatu</option>
					                                <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
					                                <option value="Viet Nam">Viet Nam</option>
					                                <option value="Virgin Islands, British">Virgin Islands, British</option>
					                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
					                                <option value="Wallis and Futuna">Wallis and Futuna</option>
					                                <option value="Western Sahara">Western Sahara</option>
					                                <option value="Yemen">Yemen</option>
					                                <option value="Zambia">Zambia</option>
					                                <option value="Zimbabwe">Zimbabwe</option>
					                            </select>
					                            <!--===================================================-->
					
					                            <hr class="new-section-sm bord-no">
					                            <p class="text-main text-bold">Multiple Selects</p>
					
					                            <!-- Multiple Select Choosen -->
					                            <!--===================================================-->
					                            <select id="demo-cs-multiselect" data-placeholder="Choose a Country..." multiple="" tabindex="4">
					                                <option value="United States">United States</option>
					                                <option value="United Kingdom">United Kingdom</option>
					                                <option value="Afghanistan">Afghanistan</option>
					                                <option value="Aland Islands">Aland Islands</option>
					                                <option value="Albania">Albania</option>
					                                <option value="Algeria">Algeria</option>
					                                <option value="American Samoa">American Samoa</option>
					                                <option value="Andorra">Andorra</option>
					                                <option value="Angola">Angola</option>
					                                <option value="Anguilla">Anguilla</option>
					                                <option value="Antarctica">Antarctica</option>
					                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
					                                <option value="Argentina">Argentina</option>
					                                <option value="Armenia">Armenia</option>
					                                <option value="Aruba">Aruba</option>
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
					                                <option value="Bermuda">Bermuda</option>
					                                <option value="Bhutan">Bhutan</option>
					                                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
					                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
					                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
					                                <option value="Botswana">Botswana</option>
					                                <option value="Bouvet Island">Bouvet Island</option>
					                                <option value="Brazil">Brazil</option>
					                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
					                                <option value="Brunei Darussalam">Brunei Darussalam</option>
					                                <option value="Bulgaria">Bulgaria</option>
					                                <option value="Burkina Faso">Burkina Faso</option>
					                                <option value="Burundi">Burundi</option>
					                                <option value="Cambodia">Cambodia</option>
					                                <option value="Cameroon">Cameroon</option>
					                                <option value="Canada">Canada</option>
					                                <option value="Cape Verde">Cape Verde</option>
					                                <option value="Cayman Islands">Cayman Islands</option>
					                                <option value="Central African Republic">Central African Republic</option>
					                                <option value="Chad">Chad</option>
					                                <option value="Chile">Chile</option>
					                                <option value="China">China</option>
					                                <option value="Christmas Island">Christmas Island</option>
					                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
					                                <option value="Colombia">Colombia</option>
					                                <option value="Comoros">Comoros</option>
					                                <option value="Congo">Congo</option>
					                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
					                                <option value="Cook Islands">Cook Islands</option>
					                                <option value="Costa Rica">Costa Rica</option>
					                                <option value="Cote D&apos;ivoire">Cote D\'ivoire</option>
					                                <option value="Croatia">Croatia</option>
					                                <option value="Cuba">Cuba</option>
					                                <option value="Curacao">Curacao</option>
					                                <option value="Cyprus">Cyprus</option>
					                                <option value="Czech Republic">Czech Republic</option>
					                                <option value="Denmark">Denmark</option>
					                                <option value="Djibouti">Djibouti</option>
					                                <option value="Dominica">Dominica</option>
					                                <option value="Dominican Republic">Dominican Republic</option>
					                                <option value="Ecuador">Ecuador</option>
					                                <option value="Egypt">Egypt</option>
					                                <option value="El Salvador">El Salvador</option>
					                                <option value="Equatorial Guinea">Equatorial Guinea</option>
					                                <option value="Eritrea">Eritrea</option>
					                                <option value="Estonia">Estonia</option>
					                                <option value="Ethiopia">Ethiopia</option>
					                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
					                                <option value="Faroe Islands">Faroe Islands</option>
					                                <option value="Fiji">Fiji</option>
					                                <option value="Finland">Finland</option>
					                                <option value="France">France</option>
					                                <option value="French Guiana">French Guiana</option>
					                                <option value="French Polynesia">French Polynesia</option>
					                                <option value="French Southern Territories">French Southern Territories</option>
					                                <option value="Gabon">Gabon</option>
					                                <option value="Gambia">Gambia</option>
					                                <option value="Georgia">Georgia</option>
					                                <option value="Germany">Germany</option>
					                                <option value="Ghana">Ghana</option>
					                                <option value="Gibraltar">Gibraltar</option>
					                                <option value="Greece">Greece</option>
					                                <option value="Greenland">Greenland</option>
					                                <option value="Grenada">Grenada</option>
					                                <option value="Guadeloupe">Guadeloupe</option>
					                                <option value="Guam">Guam</option>
					                                <option value="Guatemala">Guatemala</option>
					                                <option value="Guernsey">Guernsey</option>
					                                <option value="Guinea">Guinea</option>
					                                <option value="Guinea-bissau">Guinea-bissau</option>
					                                <option value="Guyana">Guyana</option>
					                                <option value="Haiti">Haiti</option>
					                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
					                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
					                                <option value="Honduras">Honduras</option>
					                                <option value="Hong Kong">Hong Kong</option>
					                                <option value="Hungary">Hungary</option>
					                                <option value="Iceland">Iceland</option>
					                                <option value="India">India</option>
					                                <option value="Indonesia">Indonesia</option>
					                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
					                                <option value="Iraq">Iraq</option>
					                                <option value="Ireland">Ireland</option>
					                                <option value="Isle of Man">Isle of Man</option>
					                                <option value="Israel">Israel</option>
					                                <option value="Italy">Italy</option>
					                                <option value="Jamaica">Jamaica</option>
					                                <option value="Japan">Japan</option>
					                                <option value="Jersey">Jersey</option>
					                                <option value="Jordan">Jordan</option>
					                                <option value="Kazakhstan">Kazakhstan</option>
					                                <option value="Kenya">Kenya</option>
					                                <option value="Kiribati">Kiribati</option>
					                                <option value="Korea, Democratic People&apos;s Republic of">Korea, Democratic People\'s Republic of</option>
					                                <option value="Korea, Republic of">Korea, Republic of</option>
					                                <option value="Kuwait">Kuwait</option>
					                                <option value="Kyrgyzstan">Kyrgyzstan</option>
					                                <option value="Lao People&apos;s Democratic Republic">Lao People\'s Democratic Republic</option>
					                                <option value="Latvia">Latvia</option>
					                                <option value="Lebanon">Lebanon</option>
					                                <option value="Lesotho">Lesotho</option>
					                                <option value="Liberia">Liberia</option>
					                                <option value="Libya">Libya</option>
					                                <option value="Liechtenstein">Liechtenstein</option>
					                                <option value="Lithuania">Lithuania</option>
					                                <option value="Luxembourg">Luxembourg</option>
					                                <option value="Macao">Macao</option>
					                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
					                                <option value="Madagascar">Madagascar</option>
					                                <option value="Malawi">Malawi</option>
					                                <option value="Malaysia">Malaysia</option>
					                                <option value="Maldives">Maldives</option>
					                                <option value="Mali">Mali</option>
					                                <option value="Malta">Malta</option>
					                                <option value="Marshall Islands">Marshall Islands</option>
					                                <option value="Martinique">Martinique</option>
					                                <option value="Mauritania">Mauritania</option>
					                                <option value="Mauritius">Mauritius</option>
					                                <option value="Mayotte">Mayotte</option>
					                                <option value="Mexico">Mexico</option>
					                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
					                                <option value="Moldova, Republic of">Moldova, Republic of</option>
					                                <option value="Monaco">Monaco</option>
					                                <option value="Mongolia">Mongolia</option>
					                                <option value="Montenegro">Montenegro</option>
					                                <option value="Montserrat">Montserrat</option>
					                                <option value="Morocco">Morocco</option>
					                                <option value="Mozambique">Mozambique</option>
					                                <option value="Myanmar">Myanmar</option>
					                                <option value="Namibia">Namibia</option>
					                                <option value="Nauru">Nauru</option>
					                                <option value="Nepal">Nepal</option>
					                                <option value="Netherlands">Netherlands</option>
					                                <option value="New Caledonia">New Caledonia</option>
					                                <option value="New Zealand">New Zealand</option>
					                                <option value="Nicaragua">Nicaragua</option>
					                                <option value="Niger">Niger</option>
					                                <option value="Nigeria">Nigeria</option>
					                                <option value="Niue">Niue</option>
					                                <option value="Norfolk Island">Norfolk Island</option>
					                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
					                                <option value="Norway">Norway</option>
					                                <option value="Oman">Oman</option>
					                                <option value="Pakistan">Pakistan</option>
					                                <option value="Palau">Palau</option>
					                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
					                                <option value="Panama">Panama</option>
					                                <option value="Papua New Guinea">Papua New Guinea</option>
					                                <option value="Paraguay">Paraguay</option>
					                                <option value="Peru">Peru</option>
					                                <option value="Philippines">Philippines</option>
					                                <option value="Pitcairn">Pitcairn</option>
					                                <option value="Poland">Poland</option>
					                                <option value="Portugal">Portugal</option>
					                                <option value="Puerto Rico">Puerto Rico</option>
					                                <option value="Qatar">Qatar</option>
					                                <option value="Reunion">Reunion</option>
					                                <option value="Romania">Romania</option>
					                                <option value="Russian Federation">Russian Federation</option>
					                                <option value="Rwanda">Rwanda</option>
					                                <option value="Saint Barthelemy">Saint Barthelemy</option>
					                                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
					                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
					                                <option value="Saint Lucia">Saint Lucia</option>
					                                <option value="Saint Martin (French part)">Saint Martin (French part)</option>
					                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
					                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
					                                <option value="Samoa">Samoa</option>
					                                <option value="San Marino">San Marino</option>
					                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
					                                <option value="Saudi Arabia">Saudi Arabia</option>
					                                <option value="Senegal">Senegal</option>
					                                <option value="Serbia">Serbia</option>
					                                <option value="Seychelles">Seychelles</option>
					                                <option value="Sierra Leone">Sierra Leone</option>
					                                <option value="Singapore">Singapore</option>
					                                <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
					                                <option value="Slovakia">Slovakia</option>
					                                <option value="Slovenia">Slovenia</option>
					                                <option value="Solomon Islands">Solomon Islands</option>
					                                <option value="Somalia">Somalia</option>
					                                <option value="South Africa">South Africa</option>
					                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
					                                <option value="South Sudan">South Sudan</option>
					                                <option value="Spain">Spain</option>
					                                <option value="Sri Lanka">Sri Lanka</option>
					                                <option value="Sudan">Sudan</option>
					                                <option value="Suriname">Suriname</option>
					                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
					                                <option value="Swaziland">Swaziland</option>
					                                <option value="Sweden">Sweden</option>
					                                <option value="Switzerland">Switzerland</option>
					                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
					                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
					                                <option value="Tajikistan">Tajikistan</option>
					                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
					                                <option value="Thailand">Thailand</option>
					                                <option value="Timor-leste">Timor-leste</option>
					                                <option value="Togo">Togo</option>
					                                <option value="Tokelau">Tokelau</option>
					                                <option value="Tonga">Tonga</option>
					                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
					                                <option value="Tunisia">Tunisia</option>
					                                <option value="Turkey">Turkey</option>
					                                <option value="Turkmenistan">Turkmenistan</option>
					                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
					                                <option value="Tuvalu">Tuvalu</option>
					                                <option value="Uganda">Uganda</option>
					                                <option value="Ukraine">Ukraine</option>
					                                <option value="United Arab Emirates">United Arab Emirates</option>
					                                <option value="United Kingdom">United Kingdom</option>
					                                <option value="United States">United States</option>
					                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
					                                <option value="Uruguay">Uruguay</option>
					                                <option value="Uzbekistan">Uzbekistan</option>
					                                <option value="Vanuatu">Vanuatu</option>
					                                <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
					                                <option value="Viet Nam">Viet Nam</option>
					                                <option value="Virgin Islands, British">Virgin Islands, British</option>
					                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
					                                <option value="Wallis and Futuna">Wallis and Futuna</option>
					                                <option value="Western Sahara">Western Sahara</option>
					                                <option value="Yemen">Yemen</option>
					                                <option value="Zambia">Zambia</option>
					                                <option value="Zimbabwe">Zimbabwe</option>
					                            </select>
					                            <!--===================================================-->
					
					                        </div>
					                    </div>
					                    <div class="panel">
					                        <div class="panel-heading">
					                            <h3 class="panel-title">Bootstrap Select</h3>
					                        </div>
					                        <div class="panel-body">
					                            <p class="text-main text-bold mar-no">Standart Select</p>
					                            <p>A custom select for Twitter Bootstrap using button dropdown.</p>
					
					
					                            <!-- Default Bootstrap Select -->
					                            <!--===================================================-->
					                            <select class="selectpicker">
					                                <option>HTML</option>
					                                <option>CSS</option>
					                                <option>jQuery</option>
					                                <option>Javascript</option>
					                            </select>
					                            <!--===================================================-->
					
					                            <hr class="new-section-sm bord-no">
					                            <p class="text-main text-bold">Groups</p>
					
					
					                            <!-- Bootstrap Select with Option Groups -->
					                            <!--===================================================-->
					                            <select class="selectpicker">
					                                <optgroup label="Music">
					                                    <option>Pop</option>
					                                    <option>Rap</option>
					                                    <option>Rock</option>
					                                    <option>Sountrack</option>
					                                </optgroup>
					                                <optgroup label="Movie">
					                                    <option>Action</option>
					                                    <option>Comedy</option>
					                                    <option>Adventure</option>
					                                    <option>Drama</option>
					                                    <option>Romance</option>
					                                </optgroup>
					                            </select>
					                            <!--===================================================-->
					
					
					                            <hr class="new-section-sm bord-no">
					                            <p class="text-main text-bold">Multiple selects</p>
					
					                            <!-- Bootstrap Select with Multiple Selects -->
					                            <!--===================================================-->
					                            <select class="selectpicker" multiple="" title="Choose one of the following..." data-width="100%">
					                                <option>Family</option>
					                                <option>Friend</option>
					                                <option>Partner</option>
					                            </select>
					                            <!--===================================================-->
					
					                            <hr class="new-section-sm bord-no">
					                            <p class="text-main text-bold">Add a search input</p>
					
					
					                            <!-- Bootstrap Select with Search Input -->
					                            <!--===================================================-->
					                            <select class="selectpicker" data-live-search="true" data-width="100%">
					                                <option>Family</option>
					                                <option>Friend</option>
					                                <option>Partner</option>
					                                <option>Sport</option>
					                                <option>Movie</option>
					                                <option>Documents</option>
					                                <option>Music</option>
					                                <option>Video</option>
					                            </select>
					                            <!--===================================================-->
					
					
					                            <hr class="new-section-sm bord-no">
					                            <p class="text-main text-bold">Colored</p>
					                            <div class="row">
					
					
					                                <!-- Bootstrap Select : primary -->
					                                <!--===================================================-->
					                                <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-primary">
					                                    <option>Family</option>
					                                    <option>Friend</option>
					                                    <option>Partner</option>
					                                </select>
					
					
					                                <!-- Bootstrap Select : Info -->
					                                <!--===================================================-->
					                                <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-info">
					                                    <option>Family</option>
					                                    <option>Friend</option>
					                                    <option>Partner</option>
					                                </select>
					
					
					                                <!-- Bootstrap Select : Success -->
					                                <!--===================================================-->
					                                <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-success">
					                                    <option>Family</option>
					                                    <option>Friend</option>
					                                    <option>Partner</option>
					                                </select>
					
					
					                                <!-- Bootstrap Select : Warning -->
					                                <!--===================================================-->
					                                <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-warning">
					                                    <option>Family</option>
					                                    <option>Friend</option>
					                                    <option>Partner</option>
					                                </select>
					
					
					                                <!-- Bootstrap Select : Danger -->
					                                <!--===================================================-->
					                                <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-danger">
					                                    <option>Family</option>
					                                    <option>Friend</option>
					                                    <option>Partner</option>
					                                </select>
					
					
					                                <!-- Bootstrap Select : Mint -->
					                                <!--===================================================-->
					                                <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-mint">
					                                    <option>Family</option>
					                                    <option>Friend</option>
					                                    <option>Partner</option>
					                                </select>
					
					                                <!-- Bootstrap Select : Purple -->
					                                <!--===================================================-->
					                                <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-purple">
					                                    <option>Family</option>
					                                    <option>Friend</option>
					                                    <option>Partner</option>
					                                </select>
					
					
					                                <!-- Bootstrap Select : Pink -->
					                                <!--===================================================-->
					                                <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-pink">
					                                    <option>Family</option>
					                                    <option>Friend</option>
					                                    <option>Partner</option>
					                                </select>
					
					
					                                <!-- Bootstrap Select : Dark -->
					                                <!--===================================================-->
					                                <select class="selectpicker col-xs-6 col-sm-4 col-md-6 col-lg-4" data-style="btn-dark">
					                                    <option>Family</option>
					                                    <option>Friend</option>
					                                    <option>Partner</option>
					                                </select>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="panel">
					                        <div class="panel-heading">
					                            <h3 class="panel-title">Range Slider component</h3>
					                        </div>
					                        <div class="panel-body">
					                            <p class="text-main text-semibold text-lg">Horizontal</p>
					                            <div class="row">
					                                <div class="col-xs-6">
					                                    <p class="text-main mar-btm">Default</p>
					
					                                    <!--Default Range Slider-->
					                                    <!--===================================================-->
					                                    <div id="demo-range-def"></div>
					                                    <!--===================================================-->
					
					                                    <br>
					                                    <div>
					                                        <strong>Value : </strong>
					                                        <span id="demo-range-def-val"></span>
					                                    </div>
					                                </div>
					                                <div class="col-xs-6">
					                                    <p class="text-main mar-btm">Step</p>
					
					                                    <!--Range Slider : Steps-->
					                                    <!--===================================================-->
					                                    <div id="demo-range-step"></div>
					                                    <!--===================================================-->
					
					                                    <br>
					                                    <div>
					                                        <strong>Value : </strong>
					                                        <span id="demo-range-step-val"></span>
					                                    </div>
					                                </div>
					                            </div>
					
					                            <hr class="new-section-sm bord-no">
					                            <p class="text-main mar-btm">Disabled</p>
					                            <div id="demo-range-disabled" disabled=""></div>
					                            <hr class="new-section-sm bord-no">
					
					                            <p class="text-main text-semibold text-lg">Vertical</p>
					                            <p class="text-main mar-btm">Fixed Drag</p>
					                            <div class="mar-rgt box-inline">
					
					                                <!--Vertical Range Slider-->
					                                <!--===================================================-->
					                                <div id="demo-range-ver1" class="range-vertical box-inline mar-rgt"></div>
					                                <div id="demo-range-ver2" class="range-vertical box-inline mar-hor"></div>
					                                <div id="demo-range-ver3" class="range-vertical box-inline mar-hor"></div>
					                                <div id="demo-range-ver4" class="range-vertical box-inline mar-hor"></div>
					                                <div id="demo-range-ver5" class="range-vertical box-inline mar-lft"></div>
					                                <!--===================================================-->
					
					                            </div>
					
					                            <hr class="new-section-sm bord-no">
					                            <p class="text-main text-semibold text-lg">Slider behaviour</p>
					                            <div class="row">
					                                <div class="col-xs-6">
					                                    <p class="text-main mar-btm">Drag</p>
					
					                                    <!--Range Slider : Drag -->
					                                    <!--===================================================-->
					                                    <div id="demo-range-drg"></div>
					
					                                </div>
					                                <div class="col-xs-6">
					                                    <p class="text-main mar-btm">Fixed Drag</p>
					
					                                    <!--Range slider : Fixed Drag -->
					                                    <!--===================================================-->
					                                    <div id="demo-range-fxt"></div>
					
					                                </div>
					                            </div>
					
					                            <hr class="new-section-sm bord-no">
					                            <p class="text-main text-semibold text-lg">Pips</p>
					
					                            <!--Range Slider : Pips -->
					                            <!--===================================================-->
					                            <div class="mar-btm pad-btm">
					                                <div id="demo-range-hpips" class="demo-pips pips"></div>
					                            </div>
					                            <!--===================================================-->
					
					
					                        </div>
					                    </div>
					                </div>
					                <div class="col-lg-6">
					                    <div class="panel">
					                        <div class="panel-heading">
					                            <h3 class="panel-title">Select 2</h3>
					                        </div>
					                        <div class="panel-body">
					                            <p>Select2 is a jQuery based replacement for select boxes. It can take a regular select box and turn it into: </p>
					                            <select id="demo-select2" class="demo_select2 form-control">
					                                <optgroup label="Alaskan/Hawaiian Time Zone">
					                                    <option value="AK">Alaska</option>
					                                    <option value="HI">Hawaii</option>
					                                </optgroup>
					                                <optgroup label="Pacific Time Zone">
					                                    <option value="CA">California</option>
					                                    <option value="NV">Nevada</option>
					                                    <option value="OR">Oregon</option>
					                                    <option value="WA">Washington</option>
					                                </optgroup>
					                                <optgroup label="Mountain Time Zone">
					                                    <option value="AZ">Arizona</option>
					                                    <option value="CO">Colorado</option>
					                                    <option value="ID">Idaho</option>
					                                    <option value="MT">Montana</option>
					                                    <option value="NE">Nebraska</option>
					                                    <option value="NM">New Mexico</option>
					                                    <option value="ND">North Dakota</option>
					                                    <option value="UT">Utah</option>
					                                    <option value="WY">Wyoming</option>
					                                </optgroup>
					                                <optgroup label="Central Time Zone">
					                                    <option value="AL">Alabama</option>
					                                    <option value="AR">Arkansas</option>
					                                    <option value="IL">Illinois</option>
					                                    <option value="IA">Iowa</option>
					                                    <option value="KS">Kansas</option>
					                                    <option value="KY">Kentucky</option>
					                                    <option value="LA">Louisiana</option>
					                                    <option value="MN">Minnesota</option>
					                                    <option value="MS">Mississippi</option>
					                                    <option value="MO">Missouri</option>
					                                    <option value="OK">Oklahoma</option>
					                                    <option value="SD">South Dakota</option>
					                                    <option value="TX">Texas</option>
					                                    <option value="TN">Tennessee</option>
					                                    <option value="WI">Wisconsin</option>
					                                </optgroup>
					                                <optgroup label="Eastern Time Zone">
					                                    <option value="CT">Connecticut</option>
					                                    <option value="DE">Delaware</option>
					                                    <option value="FL">Florida</option>
					                                    <option value="GA">Georgia</option>
					                                    <option value="IN">Indiana</option>
					                                    <option value="ME">Maine</option>
					                                    <option value="MD">Maryland</option>
					                                    <option value="MA">Massachusetts</option>
					                                    <option value="MI">Michigan</option>
					                                    <option value="NH">New Hampshire</option>
					                                    <option value="NJ">New Jersey</option>
					                                    <option value="NY">New York</option>
					                                    <option value="NC">North Carolina</option>
					                                    <option value="OH">Ohio</option>
					                                    <option value="PA">Pennsylvania</option>
					                                    <option value="RI">Rhode Island</option>
					                                    <option value="SC">South Carolina</option>
					                                    <option value="VT">Vermont</option>
					                                    <option value="VA">Virginia</option>
					                                    <option value="WV">West Virginia</option>
					                                </optgroup>
					                            </select>
					
					                            <hr class="new-section-sm bord-no">
					                            <p class="text-main text-bold mar-no">Placeholder</p>
					                            <p>A placeholder value can be defined and will be displayed until a selection is made.</p>
					                            <select id="demo-select2-placeholder" class="form-control">
					                                <optgroup label="Alaskan/Hawaiian Time Zone">
					                                    <option value="AK">Alaska</option>
					                                    <option value="HI">Hawaii</option>
					                                </optgroup>
					                                <optgroup label="Pacific Time Zone">
					                                    <option value="CA">California</option>
					                                    <option value="NV">Nevada</option>
					                                    <option value="OR">Oregon</option>
					                                    <option value="WA">Washington</option>
					                                </optgroup>
					                                <optgroup label="Mountain Time Zone">
					                                    <option value="AZ">Arizona</option>
					                                    <option value="CO">Colorado</option>
					                                    <option value="ID">Idaho</option>
					                                    <option value="MT">Montana</option>
					                                    <option value="NE">Nebraska</option>
					                                    <option value="NM">New Mexico</option>
					                                    <option value="ND">North Dakota</option>
					                                    <option value="UT">Utah</option>
					                                    <option value="WY">Wyoming</option>
					                                </optgroup>
					                                <optgroup label="Central Time Zone">
					                                    <option value="AL">Alabama</option>
					                                    <option value="AR">Arkansas</option>
					                                    <option value="IL">Illinois</option>
					                                    <option value="IA">Iowa</option>
					                                    <option value="KS">Kansas</option>
					                                    <option value="KY">Kentucky</option>
					                                    <option value="LA">Louisiana</option>
					                                    <option value="MN">Minnesota</option>
					                                    <option value="MS">Mississippi</option>
					                                    <option value="MO">Missouri</option>
					                                    <option value="OK">Oklahoma</option>
					                                    <option value="SD">South Dakota</option>
					                                    <option value="TX">Texas</option>
					                                    <option value="TN">Tennessee</option>
					                                    <option value="WI">Wisconsin</option>
					                                </optgroup>
					                                <optgroup label="Eastern Time Zone">
					                                    <option value="CT">Connecticut</option>
					                                    <option value="DE">Delaware</option>
					                                    <option value="FL">Florida</option>
					                                    <option value="GA">Georgia</option>
					                                    <option value="IN">Indiana</option>
					                                    <option value="ME">Maine</option>
					                                    <option value="MD">Maryland</option>
					                                    <option value="MA">Massachusetts</option>
					                                    <option value="MI">Michigan</option>
					                                    <option value="NH">New Hampshire</option>
					                                    <option value="NJ">New Jersey</option>
					                                    <option value="NY">New York</option>
					                                    <option value="NC">North Carolina</option>
					                                    <option value="OH">Ohio</option>
					                                    <option value="PA">Pennsylvania</option>
					                                    <option value="RI">Rhode Island</option>
					                                    <option value="SC">South Carolina</option>
					                                    <option value="VT">Vermont</option>
					                                    <option value="VA">Virginia</option>
					                                    <option value="WV">West Virginia</option>
					                                </optgroup>
					                            </select>
					
					                            <hr class="new-section-sm bord-no">
					                            <p class="text-main text-bold mar-no">Multiple select boxes</p>
					                            <p>Select2 also supports multi-value select boxes. The select below is declared with the <code>multiple</code> attribute.</p>
					                            <select id="demo-select2-multiple-selects" multiple="multiple" class="form-control">
					                                <optgroup label="Alaskan/Hawaiian Time Zone">
					                                    <option value="AK">Alaska</option>
					                                    <option value="HI">Hawaii</option>
					                                </optgroup>
					                                <optgroup label="Pacific Time Zone">
					                                    <option value="CA">California</option>
					                                    <option value="NV">Nevada</option>
					                                    <option value="OR">Oregon</option>
					                                    <option value="WA">Washington</option>
					                                </optgroup>
					                                <optgroup label="Mountain Time Zone">
					                                    <option value="AZ">Arizona</option>
					                                    <option value="CO">Colorado</option>
					                                    <option value="ID">Idaho</option>
					                                    <option value="MT">Montana</option>
					                                    <option value="NE">Nebraska</option>
					                                    <option value="NM">New Mexico</option>
					                                    <option value="ND">North Dakota</option>
					                                    <option value="UT">Utah</option>
					                                    <option value="WY">Wyoming</option>
					                                </optgroup>
					                                <optgroup label="Central Time Zone">
					                                    <option value="AL">Alabama</option>
					                                    <option value="AR">Arkansas</option>
					                                    <option value="IL">Illinois</option>
					                                    <option value="IA">Iowa</option>
					                                    <option value="KS">Kansas</option>
					                                    <option value="KY">Kentucky</option>
					                                    <option value="LA">Louisiana</option>
					                                    <option value="MN">Minnesota</option>
					                                    <option value="MS">Mississippi</option>
					                                    <option value="MO">Missouri</option>
					                                    <option value="OK">Oklahoma</option>
					                                    <option value="SD">South Dakota</option>
					                                    <option value="TX">Texas</option>
					                                    <option value="TN">Tennessee</option>
					                                    <option value="WI">Wisconsin</option>
					                                </optgroup>
					                                <optgroup label="Eastern Time Zone">
					                                    <option value="CT">Connecticut</option>
					                                    <option value="DE">Delaware</option>
					                                    <option value="FL">Florida</option>
					                                    <option value="GA">Georgia</option>
					                                    <option value="IN">Indiana</option>
					                                    <option value="ME">Maine</option>
					                                    <option value="MD">Maryland</option>
					                                    <option value="MA">Massachusetts</option>
					                                    <option value="MI">Michigan</option>
					                                    <option value="NH">New Hampshire</option>
					                                    <option value="NJ">New Jersey</option>
					                                    <option value="NY">New York</option>
					                                    <option value="NC">North Carolina</option>
					                                    <option value="OH">Ohio</option>
					                                    <option value="PA">Pennsylvania</option>
					                                    <option value="RI">Rhode Island</option>
					                                    <option value="SC">South Carolina</option>
					                                    <option value="VT">Vermont</option>
					                                    <option value="VA">Virginia</option>
					                                    <option value="WV">West Virginia</option>
					                                </optgroup>
					                            </select>
					
					                        </div>
					                    </div>
					                    <div class="panel">
					                        <div class="panel-heading">
					                            <h3 class="panel-title">Bootstrap Timepicker</h3>
					                        </div>
					                        <div class="panel-body">
					                            <p>Easily select a time for a text input using your mouse or keyboards arrow keys.</p>
					                            <br>
					                            <p class="text-main text-bold">Text input</p>
					
					                            <!--Bootstrap Timepicker : Text Input-->
					                            <!--===================================================-->
					                            <input id="demo-tp-textinput" type="text" class="form-control">
					
					                            <hr class="new-section-sm bord-no">
					                            <p class="text-main text-bold mar-btm">Component</p>
					
					                            <!--Bootstrap Timepicker : Component-->
					                            <!--===================================================-->
					                            <div class="input-group date">
					                                <input id="demo-tp-com" type="text" class="form-control">
					                                <span class="input-group-addon"><i class="demo-pli-clock"></i></span>
					                            </div>
					                            <!--===================================================-->
					
					                        </div>
					                    </div>
					                    <div class="panel">
					                        <div class="panel-heading">
					                            <h3 class="panel-title">Bootstrap Datepicker</h3>
					                        </div>
					                        <div class="panel-body">
					                            <p>Bootstrap-datepicker provides a flexible datepicker widget in the Twitter bootstrap style.</p><br>
					                            <p class="text-main text-bold">Text input</p>
					
					
					                            <!--Bootstrap Datepicker : Text Input-->
					                            <!--===================================================-->
					                            <div id="demo-dp-txtinput">
					                                <input type="text" class="form-control">
					                            </div>
					                            <!--===================================================-->
					
					                            <hr class="new-section-sm bord-no">
					
					                            <p class="text-main text-bold">Component</p>
					
					                            <!--Bootstrap Datepicker : Component-->
					                            <!--===================================================-->
					                            <div id="demo-dp-component">
					                                <div class="input-group date">
					                                    <input type="text" class="form-control">
					                                    <span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>
					                                </div>
					                                <small class="text-muted">Auto close on select</small>
					                            </div>
					                            <!--===================================================-->
					
					                            <hr class="new-section-sm bord-no">
					                            <p class="text-main text-bold">Range</p>
					
					                            <!--Bootstrap Datepicker : Range-->
					                            <!--===================================================-->
					                            <div id="demo-dp-range">
					                                <div class="input-daterange input-group" id="datepicker">
					                                    <input type="text" class="form-control" name="start">
					                                    <span class="input-group-addon">to</span>
					                                    <input type="text" class="form-control" name="end">
					                                </div>
					                            </div>
					                            <!--===================================================-->
					
					                            <hr class="new-section-sm bord-no">
					                            <p class="text-main text-bold">Inline</p>
					
					                            <!--Bootstrap Datepicker : Inline-->
					                            <!--===================================================-->
					                            <div id="demo-dp-inline">
					                                <div></div>
					                            </div>
					                            <!--===================================================-->
					
					                        </div>
					                    </div>
					                    <div class="panel">
					                        <div class="panel-heading">
					                            <h3 class="panel-title">Switchery</h3>
					                        </div>
					                        <div class="panel-body">
					                            <p>Switchery is a simple component that helps you turn your default HTML checkbox inputs into beautiful iOS 7 style switches in just few simple steps.</p>
					                            <br>
					                            <div class="row">
					                                <div class="col-md-4">
					
					                                    <p class="text-main text-bold">Checked</p>
					
					                                    <!--Switchery : Checked-->
					                                    <!--===================================================-->
					                                    <input id="demo-sw-checked" type="checkbox" checked="">
					                                    <!--===================================================-->
					
					                                </div>
					                                <div class="col-md-4">
					
					                                    <p class="text-main text-bold">Uncheked</p>
					
					                                    <!--Switchery : Unchecked-->
					                                    <!--===================================================-->
					                                    <input id="demo-sw-unchecked" type="checkbox">
					                                    <!--===================================================-->
					
					                                </div>
					                                <div class="col-md-4">
					
					                                    <p class="text-main text-bold">Checking state</p>
					                                    <div class="box-inline mar-rgt">
					
					                                        <!--Switchery : Checked by default-->
					                                        <!--===================================================-->
					                                        <input id="demo-sw-checkstate" type="checkbox" checked="">
					                                        <!--===================================================-->
					
					                                    </div>
					
					                                    <!--Switchery : Checking State Field-->
					                                    <!--===================================================-->
					                                    <span id="demo-sw-checkstate-field" class="label label-info"></span>
					                                    <!--===================================================-->
					
					                                </div>
					                            </div>
					
					                            <hr class="new-section-sm bord-no">
					
					                            <div class="row">
					                                <div class="col-md-6">
					                                    <p class="text-main text-bold">Colored</p>
					                                    <ul class="list-inline">
					
					                                        <!--Switchery : Colored-->
					                                        <!--===================================================-->
					                                        <li class="mar-btm">
					                                            <input id="demo-sw-clr1" type="checkbox" checked="">
					                                        </li>
					                                        <li class="mar-btm">
					                                            <input id="demo-sw-clr2" type="checkbox" checked="">
					                                        </li>
					                                        <li class="mar-btm">
					                                            <input id="demo-sw-clr3" type="checkbox" checked="">
					                                        </li>
					                                        <li class="mar-btm">
					                                            <input id="demo-sw-clr4" type="checkbox" checked="">
					                                        </li>
					                                        <li class="mar-btm">
					                                            <input id="demo-sw-clr5" type="checkbox" checked="">
					                                        </li>
					                                        <li class="mar-btm">
					                                            <input id="demo-sw-clr6" type="checkbox" checked="">
					                                        </li>
					                                        <li class="mar-btm">
					                                            <input id="demo-sw-clr7" type="checkbox" checked="">
					                                        </li>
					                                        <li class="mar-btm">
					                                            <input id="demo-sw-clr8" type="checkbox" checked="">
					                                        </li>
					                                        <!--===================================================-->
					
					                                    </ul>
					                                </div>
					                                <div class="col-md-6">
					                                    <p class="text-main text-bold">Sizes</p>
					                                    <ul class="list-inline">
					
					                                        <!--Switchery : Sizes-->
					                                        <!--===================================================-->
					                                        <li><input id="demo-sw-sz-lg" type="checkbox" checked=""></li>
					                                        <li><input id="demo-sw-sz" type="checkbox" checked=""></li>
					                                        <li><input id="demo-sw-sz-sm" type="checkbox" checked=""></li>
					                                        <!--===================================================-->
					
					                                    </ul>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div>
					
					
                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
	@endsection


	@section('script')
  

    
<!--Switchery [ OPTIONAL ]-->
<script src="{{ asset('assets\plugins\switchery\switchery.min.js') }}"></script>


<!--Bootstrap Select [ OPTIONAL ]-->
<script src="{{ asset('assets\plugins\bootstrap-select\bootstrap-select.min.js') }}"></script>


<!--Bootstrap Tags Input [ OPTIONAL ]-->
<script src="{{ asset('assets\plugins\bootstrap-tagsinput\bootstrap-tagsinput.min.js') }}"></script>


<!--Chosen [ OPTIONAL ]-->
<script src="{{ asset('assets\plugins\chosen\chosen.jquery.min.js') }}"></script>


<!--noUiSlider [ OPTIONAL ]-->
<script src="{{ asset('assets\plugins\noUiSlider\nouislider.min.js') }}"></script>


<!--Select2 [ OPTIONAL ]-->
<script src="{{ asset('assets\plugins\select2\js\select2.min.js') }}"></script>


<!--Bootstrap Timepicker [ OPTIONAL ]-->
<script src="{{ asset('assets\plugins\bootstrap-timepicker\bootstrap-timepicker.min.js') }}"></script>


<!--Bootstrap Datepicker [ OPTIONAL ]-->
<script src="{{ asset('assets\plugins\bootstrap-datepicker\bootstrap-datepicker.min.js') }}"></script>


<!--Form Component [ SAMPLE ]-->
<script src="{{ asset('assets\js\demo\form-component.js') }}"></script>

	@endsection