<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>SyC Contable API</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .PHP-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.20.0.js") }}"></script>

    <script src="{{ asset("vendor/scribe/js/theme-default-3.20.0.js") }}"></script>

</head>

<body data-languages="[&quot;PHP&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
            <img src="https://media-exp1.licdn.com/dms/image/C560BAQFjWmGTmZL-bw/company-logo_200_200/0/1596636307248?e=2159024400&amp;v=beta&amp;t=BIz4ner1q2khkSTXb7zDhByPxqOjsb7fbkARbecpq1o" alt="logo" class="logo" style="padding-top: 10px;" width="230px"/>
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="PHP">PHP</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="business-line">
                    <a href="#business-line">Business Line</a>
                </li>
                                    <ul id="tocify-subheader-business-line" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="business-line-GETapi-businessLine">
                        <a href="#business-line-GETapi-businessLine">GET api/businessLine</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="business-line-POSTapi-businessLine">
                        <a href="#business-line-POSTapi-businessLine">POST api/businessLine</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="business-line-GETapi-businessLine--id-">
                        <a href="#business-line-GETapi-businessLine--id-">GET api/businessLine/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="business-line-PUTapi-businessLine--id-">
                        <a href="#business-line-PUTapi-businessLine--id-">PUT api/businessLine/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="business-line-DELETEapi-businessLine--id-">
                        <a href="#business-line-DELETEapi-businessLine--id-">DELETE api/businessLine/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-3" class="tocify-header">
                <li class="tocify-item level-1" data-unique="city">
                    <a href="#city">City</a>
                </li>
                                    <ul id="tocify-subheader-city" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="city-GETapi-city">
                        <a href="#city-GETapi-city">GET api/city</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-4" class="tocify-header">
                <li class="tocify-item level-1" data-unique="civil-status">
                    <a href="#civil-status">Civil Status</a>
                </li>
                                    <ul id="tocify-subheader-civil-status" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="civil-status-GETapi-civilStatus">
                        <a href="#civil-status-GETapi-civilStatus">GET api/civilStatus</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-5" class="tocify-header">
                <li class="tocify-item level-1" data-unique="concept">
                    <a href="#concept">Concept</a>
                </li>
                                    <ul id="tocify-subheader-concept" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="concept-GETapi-concept">
                        <a href="#concept-GETapi-concept">GET api/concept</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="concept-POSTapi-concept">
                        <a href="#concept-POSTapi-concept">POST api/concept</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="concept-GETapi-concept--id-">
                        <a href="#concept-GETapi-concept--id-">GET api/concept/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="concept-PUTapi-concept--id-">
                        <a href="#concept-PUTapi-concept--id-">PUT api/concept/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="concept-DELETEapi-concept--id-">
                        <a href="#concept-DELETEapi-concept--id-">DELETE api/concept/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-6" class="tocify-header">
                <li class="tocify-item level-1" data-unique="concept-type">
                    <a href="#concept-type">Concept Type</a>
                </li>
                                    <ul id="tocify-subheader-concept-type" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="concept-type-GETapi-conceptType">
                        <a href="#concept-type-GETapi-conceptType">GET api/conceptType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="concept-type-POSTapi-conceptType">
                        <a href="#concept-type-POSTapi-conceptType">POST api/conceptType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="concept-type-GETapi-conceptType--id-">
                        <a href="#concept-type-GETapi-conceptType--id-">GET api/conceptType/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="concept-type-PUTapi-conceptType--id-">
                        <a href="#concept-type-PUTapi-conceptType--id-">PUT api/conceptType/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="concept-type-DELETEapi-conceptType--id-">
                        <a href="#concept-type-DELETEapi-conceptType--id-">DELETE api/conceptType/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-7" class="tocify-header">
                <li class="tocify-item level-1" data-unique="constitutiontype">
                    <a href="#constitutiontype">ConstitutionType</a>
                </li>
                                    <ul id="tocify-subheader-constitutiontype" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="constitutiontype-GETapi-constitutionType">
                        <a href="#constitutiontype-GETapi-constitutionType">GET api/constitutionType</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-8" class="tocify-header">
                <li class="tocify-item level-1" data-unique="contact">
                    <a href="#contact">Contact</a>
                </li>
                                    <ul id="tocify-subheader-contact" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="contact-GETapi-contact">
                        <a href="#contact-GETapi-contact">GET api/contact</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="contact-POSTapi-contact">
                        <a href="#contact-POSTapi-contact">POST api/contact</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="contact-GETapi-contact--id-">
                        <a href="#contact-GETapi-contact--id-">GET api/contact/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="contact-PUTapi-contact--id-">
                        <a href="#contact-PUTapi-contact--id-">PUT api/contact/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="contact-DELETEapi-contact--id-">
                        <a href="#contact-DELETEapi-contact--id-">DELETE api/contact/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="contact-GETapi-contact-provider--provider_id-">
                        <a href="#contact-GETapi-contact-provider--provider_id-">GET api/contact/provider/{provider_id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-9" class="tocify-header">
                <li class="tocify-item level-1" data-unique="contract-type">
                    <a href="#contract-type">Contract Type</a>
                </li>
                                    <ul id="tocify-subheader-contract-type" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="contract-type-GETapi-contractType">
                        <a href="#contract-type-GETapi-contractType">GET api/contractType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="contract-type-POSTapi-contractType">
                        <a href="#contract-type-POSTapi-contractType">POST api/contractType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="contract-type-GETapi-contractType--id-">
                        <a href="#contract-type-GETapi-contractType--id-">GET api/contractType/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="contract-type-PUTapi-contractType--id-">
                        <a href="#contract-type-PUTapi-contractType--id-">PUT api/contractType/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="contract-type-DELETEapi-contractType--id-">
                        <a href="#contract-type-DELETEapi-contractType--id-">DELETE api/contractType/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-10" class="tocify-header">
                <li class="tocify-item level-1" data-unique="covenant">
                    <a href="#covenant">Covenant</a>
                </li>
                                    <ul id="tocify-subheader-covenant" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="covenant-GETapi-covenant">
                        <a href="#covenant-GETapi-covenant">GET api/covenant</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="covenant-POSTapi-covenant">
                        <a href="#covenant-POSTapi-covenant">POST api/covenant</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="covenant-GETapi-covenant--id-">
                        <a href="#covenant-GETapi-covenant--id-">GET api/covenant/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="covenant-PUTapi-covenant--id-">
                        <a href="#covenant-PUTapi-covenant--id-">PUT api/covenant/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="covenant-DELETEapi-covenant--id-">
                        <a href="#covenant-DELETEapi-covenant--id-">DELETE api/covenant/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="covenant-GETapi-consultaCovenant">
                        <a href="#covenant-GETapi-consultaCovenant">GET api/consultaCovenant</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-11" class="tocify-header">
                <li class="tocify-item level-1" data-unique="covenant-type">
                    <a href="#covenant-type">Covenant Type</a>
                </li>
                                    <ul id="tocify-subheader-covenant-type" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="covenant-type-GETapi-covenantType">
                        <a href="#covenant-type-GETapi-covenantType">GET api/covenantType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="covenant-type-POSTapi-covenantType">
                        <a href="#covenant-type-POSTapi-covenantType">POST api/covenantType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="covenant-type-GETapi-covenantType--id-">
                        <a href="#covenant-type-GETapi-covenantType--id-">GET api/covenantType/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="covenant-type-PUTapi-covenantType--id-">
                        <a href="#covenant-type-PUTapi-covenantType--id-">PUT api/covenantType/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="covenant-type-DELETEapi-covenantType--id-">
                        <a href="#covenant-type-DELETEapi-covenantType--id-">DELETE api/covenantType/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-12" class="tocify-header">
                <li class="tocify-item level-1" data-unique="education-level">
                    <a href="#education-level">Education Level</a>
                </li>
                                    <ul id="tocify-subheader-education-level" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="education-level-GETapi-educationLevel">
                        <a href="#education-level-GETapi-educationLevel">GET api/educationLevel</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-13" class="tocify-header">
                <li class="tocify-item level-1" data-unique="emergency-contact">
                    <a href="#emergency-contact">Emergency Contact</a>
                </li>
                                    <ul id="tocify-subheader-emergency-contact" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="emergency-contact-GETapi-emergencyContact">
                        <a href="#emergency-contact-GETapi-emergencyContact">GET api/emergencyContact</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="emergency-contact-POSTapi-emergencyContact">
                        <a href="#emergency-contact-POSTapi-emergencyContact">POST api/emergencyContact</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="emergency-contact-GETapi-emergencyContact--id-">
                        <a href="#emergency-contact-GETapi-emergencyContact--id-">GET api/emergencyContact/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="emergency-contact-PUTapi-emergencyContact--id-">
                        <a href="#emergency-contact-PUTapi-emergencyContact--id-">PUT api/emergencyContact/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="emergency-contact-DELETEapi-emergencyContact--id-">
                        <a href="#emergency-contact-DELETEapi-emergencyContact--id-">DELETE api/emergencyContact/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-14" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-checkLogin">
                        <a href="#endpoints-GETapi-checkLogin">GET api/checkLogin</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-responsabilityType">
                        <a href="#endpoints-GETapi-responsabilityType">GET api/responsabilityType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-usersColletion">
                        <a href="#endpoints-GETapi-usersColletion">GET api/usersColletion</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-15" class="tocify-header">
                <li class="tocify-item level-1" data-unique="gender">
                    <a href="#gender">Gender</a>
                </li>
                                    <ul id="tocify-subheader-gender" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="gender-GETapi-gender">
                        <a href="#gender-GETapi-gender">GET api/gender</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-16" class="tocify-header">
                <li class="tocify-item level-1" data-unique="headquarter">
                    <a href="#headquarter">Headquarter</a>
                </li>
                                    <ul id="tocify-subheader-headquarter" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="headquarter-GETapi-headquarter">
                        <a href="#headquarter-GETapi-headquarter">GET api/headquarter</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="headquarter-POSTapi-headquarter">
                        <a href="#headquarter-POSTapi-headquarter">POST api/headquarter</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="headquarter-GETapi-headquarter--id-">
                        <a href="#headquarter-GETapi-headquarter--id-">GET api/headquarter/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="headquarter-PUTapi-headquarter--id-">
                        <a href="#headquarter-PUTapi-headquarter--id-">PUT api/headquarter/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="headquarter-DELETEapi-headquarter--id-">
                        <a href="#headquarter-DELETEapi-headquarter--id-">DELETE api/headquarter/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-17" class="tocify-header">
                <li class="tocify-item level-1" data-unique="health-provider">
                    <a href="#health-provider">Health Provider</a>
                </li>
                                    <ul id="tocify-subheader-health-provider" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="health-provider-GETapi-healthProvider">
                        <a href="#health-provider-GETapi-healthProvider">GET api/healthProvider</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="health-provider-POSTapi-healthProvider">
                        <a href="#health-provider-POSTapi-healthProvider">POST api/healthProvider</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="health-provider-GETapi-healthProvider--id-">
                        <a href="#health-provider-GETapi-healthProvider--id-">GET api/healthProvider/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="health-provider-PUTapi-healthProvider--id-">
                        <a href="#health-provider-PUTapi-healthProvider--id-">PUT api/healthProvider/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="health-provider-DELETEapi-healthProvider--id-">
                        <a href="#health-provider-DELETEapi-healthProvider--id-">DELETE api/healthProvider/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-18" class="tocify-header">
                <li class="tocify-item level-1" data-unique="identification-type">
                    <a href="#identification-type">Identification Type</a>
                </li>
                                    <ul id="tocify-subheader-identification-type" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="identification-type-GETapi-identificationType">
                        <a href="#identification-type-GETapi-identificationType">GET api/identificationType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="identification-type-POSTapi-identificationType">
                        <a href="#identification-type-POSTapi-identificationType">POST api/identificationType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="identification-type-GETapi-identificationType--id-">
                        <a href="#identification-type-GETapi-identificationType--id-">GET api/identificationType/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="identification-type-PUTapi-identificationType--id-">
                        <a href="#identification-type-PUTapi-identificationType--id-">PUT api/identificationType/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="identification-type-DELETEapi-identificationType--id-">
                        <a href="#identification-type-DELETEapi-identificationType--id-">DELETE api/identificationType/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-19" class="tocify-header">
                <li class="tocify-item level-1" data-unique="kinkship">
                    <a href="#kinkship">Kinkship</a>
                </li>
                                    <ul id="tocify-subheader-kinkship" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="kinkship-GETapi-kinship">
                        <a href="#kinkship-GETapi-kinship">GET api/kinship</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-20" class="tocify-header">
                <li class="tocify-item level-1" data-unique="occupational-risk-manager">
                    <a href="#occupational-risk-manager">Occupational Risk Manager</a>
                </li>
                                    <ul id="tocify-subheader-occupational-risk-manager" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="occupational-risk-manager-GETapi-ocupationalRiskManager">
                        <a href="#occupational-risk-manager-GETapi-ocupationalRiskManager">GET api/ocupationalRiskManager</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-21" class="tocify-header">
                <li class="tocify-item level-1" data-unique="payroll">
                    <a href="#payroll">Payroll</a>
                </li>
                                    <ul id="tocify-subheader-payroll" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="payroll-GETapi-payroll">
                        <a href="#payroll-GETapi-payroll">GET api/payroll</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="payroll-POSTapi-payroll">
                        <a href="#payroll-POSTapi-payroll">POST api/payroll</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="payroll-GETapi-payroll--id-">
                        <a href="#payroll-GETapi-payroll--id-">GET api/payroll/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="payroll-PUTapi-payroll--id-">
                        <a href="#payroll-PUTapi-payroll--id-">PUT api/payroll/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="payroll-DELETEapi-payroll--id-">
                        <a href="#payroll-DELETEapi-payroll--id-">DELETE api/payroll/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="payroll-GETapi-consultaPayroll">
                        <a href="#payroll-GETapi-consultaPayroll">GET api/consultaPayroll</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="payroll-GETapi-consultDeduccion">
                        <a href="#payroll-GETapi-consultDeduccion">GET api/consultDeduccion</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="payroll-GETapi-payroll-user--user-">
                        <a href="#payroll-GETapi-payroll-user--user-">GET api/payroll/user/{user}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="payroll-POSTapi-payrollConcept--payroll_id-">
                        <a href="#payroll-POSTapi-payrollConcept--payroll_id-">POST api/payrollConcept/{payroll_id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="payroll-DELETEapi-payrollDeleteConcept--payroll_id-">
                        <a href="#payroll-DELETEapi-payrollDeleteConcept--payroll_id-">DELETE api/payrollDeleteConcept/{payroll_id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-22" class="tocify-header">
                <li class="tocify-item level-1" data-unique="pension-fund">
                    <a href="#pension-fund">Pension Fund</a>
                </li>
                                    <ul id="tocify-subheader-pension-fund" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="pension-fund-GETapi-pensionFund">
                        <a href="#pension-fund-GETapi-pensionFund">GET api/pensionFund</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="pension-fund-POSTapi-pensionFund">
                        <a href="#pension-fund-POSTapi-pensionFund">POST api/pensionFund</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="pension-fund-GETapi-pensionFund--id-">
                        <a href="#pension-fund-GETapi-pensionFund--id-">GET api/pensionFund/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="pension-fund-PUTapi-pensionFund--id-">
                        <a href="#pension-fund-PUTapi-pensionFund--id-">PUT api/pensionFund/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="pension-fund-DELETEapi-pensionFund--id-">
                        <a href="#pension-fund-DELETEapi-pensionFund--id-">DELETE api/pensionFund/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-23" class="tocify-header">
                <li class="tocify-item level-1" data-unique="period">
                    <a href="#period">Period</a>
                </li>
                                    <ul id="tocify-subheader-period" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="period-GETapi-period">
                        <a href="#period-GETapi-period">GET api/period</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="period-POSTapi-period">
                        <a href="#period-POSTapi-period">POST api/period</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="period-GETapi-period--id-">
                        <a href="#period-GETapi-period--id-">GET api/period/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="period-PUTapi-period--id-">
                        <a href="#period-PUTapi-period--id-">PUT api/period/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="period-DELETEapi-period--id-">
                        <a href="#period-DELETEapi-period--id-">DELETE api/period/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-24" class="tocify-header">
                <li class="tocify-item level-1" data-unique="periodicity-type">
                    <a href="#periodicity-type">Periodicity Type</a>
                </li>
                                    <ul id="tocify-subheader-periodicity-type" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="periodicity-type-GETapi-periodicityType">
                        <a href="#periodicity-type-GETapi-periodicityType">GET api/periodicityType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="periodicity-type-POSTapi-periodicityType">
                        <a href="#periodicity-type-POSTapi-periodicityType">POST api/periodicityType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="periodicity-type-GETapi-periodicityType--id-">
                        <a href="#periodicity-type-GETapi-periodicityType--id-">GET api/periodicityType/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="periodicity-type-PUTapi-periodicityType--id-">
                        <a href="#periodicity-type-PUTapi-periodicityType--id-">PUT api/periodicityType/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="periodicity-type-DELETEapi-periodicityType--id-">
                        <a href="#periodicity-type-DELETEapi-periodicityType--id-">DELETE api/periodicityType/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-25" class="tocify-header">
                <li class="tocify-item level-1" data-unique="position">
                    <a href="#position">Position</a>
                </li>
                                    <ul id="tocify-subheader-position" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="position-GETapi-position">
                        <a href="#position-GETapi-position">GET api/position</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="position-POSTapi-position">
                        <a href="#position-POSTapi-position">POST api/position</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="position-GETapi-position--id-">
                        <a href="#position-GETapi-position--id-">GET api/position/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="position-PUTapi-position--id-">
                        <a href="#position-PUTapi-position--id-">PUT api/position/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="position-DELETEapi-position--id-">
                        <a href="#position-DELETEapi-position--id-">DELETE api/position/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-26" class="tocify-header">
                <li class="tocify-item level-1" data-unique="provider">
                    <a href="#provider">Provider</a>
                </li>
                                    <ul id="tocify-subheader-provider" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="provider-GETapi-provider">
                        <a href="#provider-GETapi-provider">GET api/provider</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="provider-POSTapi-provider">
                        <a href="#provider-POSTapi-provider">POST api/provider</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="provider-GETapi-provider--id-">
                        <a href="#provider-GETapi-provider--id-">GET api/provider/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="provider-PUTapi-provider--id-">
                        <a href="#provider-PUTapi-provider--id-">PUT api/provider/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="provider-DELETEapi-provider--id-">
                        <a href="#provider-DELETEapi-provider--id-">DELETE api/provider/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-27" class="tocify-header">
                <li class="tocify-item level-1" data-unique="province">
                    <a href="#province">Province</a>
                </li>
                                    <ul id="tocify-subheader-province" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="province-GETapi-province">
                        <a href="#province-GETapi-province">GET api/province</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-28" class="tocify-header">
                <li class="tocify-item level-1" data-unique="provision">
                    <a href="#provision">Provision</a>
                </li>
                                    <ul id="tocify-subheader-provision" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="provision-GETapi-provision">
                        <a href="#provision-GETapi-provision">GET api/provision</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="provision-GETapi-provision--id-">
                        <a href="#provision-GETapi-provision--id-">GET api/provision/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="provision-DELETEapi-provision--id-">
                        <a href="#provision-DELETEapi-provision--id-">DELETE api/provision/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="provision-POSTapi-provision">
                        <a href="#provision-POSTapi-provision">POST api/provision</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="provision-PUTapi-provision--id-">
                        <a href="#provision-PUTapi-provision--id-">PUT api/provision/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-29" class="tocify-header">
                <li class="tocify-item level-1" data-unique="salary-type">
                    <a href="#salary-type">Salary Type</a>
                </li>
                                    <ul id="tocify-subheader-salary-type" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="salary-type-GETapi-salaryType">
                        <a href="#salary-type-GETapi-salaryType">GET api/salaryType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="salary-type-POSTapi-salaryType">
                        <a href="#salary-type-POSTapi-salaryType">POST api/salaryType</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="salary-type-GETapi-salaryType--id-">
                        <a href="#salary-type-GETapi-salaryType--id-">GET api/salaryType/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="salary-type-PUTapi-salaryType--id-">
                        <a href="#salary-type-PUTapi-salaryType--id-">PUT api/salaryType/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="salary-type-DELETEapi-salaryType--id-">
                        <a href="#salary-type-DELETEapi-salaryType--id-">DELETE api/salaryType/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-30" class="tocify-header">
                <li class="tocify-item level-1" data-unique="setting">
                    <a href="#setting">Setting</a>
                </li>
                                    <ul id="tocify-subheader-setting" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="setting-GETapi-setting">
                        <a href="#setting-GETapi-setting">GET api/setting</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="setting-POSTapi-setting">
                        <a href="#setting-POSTapi-setting">POST api/setting</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="setting-GETapi-setting--id-">
                        <a href="#setting-GETapi-setting--id-">GET api/setting/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="setting-PUTapi-setting--id-">
                        <a href="#setting-PUTapi-setting--id-">PUT api/setting/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="setting-DELETEapi-setting--id-">
                        <a href="#setting-DELETEapi-setting--id-">DELETE api/setting/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-31" class="tocify-header">
                <li class="tocify-item level-1" data-unique="strata">
                    <a href="#strata">Strata</a>
                </li>
                                    <ul id="tocify-subheader-strata" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="strata-GETapi-strata">
                        <a href="#strata-GETapi-strata">GET api/strata</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-32" class="tocify-header">
                <li class="tocify-item level-1" data-unique="user">
                    <a href="#user">User</a>
                </li>
                                    <ul id="tocify-subheader-user" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="user-GETapi-user">
                        <a href="#user-GETapi-user">GET api/user</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="user-POSTapi-user">
                        <a href="#user-POSTapi-user">POST api/user</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="user-GETapi-user--id-">
                        <a href="#user-GETapi-user--id-">GET api/user/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="user-DELETEapi-user--id-">
                        <a href="#user-DELETEapi-user--id-">DELETE api/user/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="user-PUTapi-user--id-">
                        <a href="#user-PUTapi-user--id-">PUT api/user/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="user-POSTapi-user-asignarConvenio--user_id-">
                        <a href="#user-POSTapi-user-asignarConvenio--user_id-">POST api/user/asignarConvenio/{user_id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="user-DELETEapi-user-eliminarConvenio--user_id-">
                        <a href="#user-DELETEapi-user-eliminarConvenio--user_id-">DELETE api/user/eliminarConvenio/{user_id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-33" class="tocify-header">
                <li class="tocify-item level-1" data-unique="vacation">
                    <a href="#vacation">Vacation</a>
                </li>
                                    <ul id="tocify-subheader-vacation" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="vacation-GETapi-vacation">
                        <a href="#vacation-GETapi-vacation">GET api/vacation</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="vacation-POSTapi-vacation">
                        <a href="#vacation-POSTapi-vacation">POST api/vacation</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="vacation-GETapi-vacation--id-">
                        <a href="#vacation-GETapi-vacation--id-">GET api/vacation/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="vacation-PUTapi-vacation--id-">
                        <a href="#vacation-PUTapi-vacation--id-">PUT api/vacation/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="vacation-DELETEapi-vacation--id-">
                        <a href="#vacation-DELETEapi-vacation--id-">DELETE api/vacation/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="vacation-POSTapi-calcDays">
                        <a href="#vacation-POSTapi-calcDays">POST api/calcDays</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: February 28 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>Esta documentación tiene como objetivo proporcionar toda la información que necesita para trabajar con nuestra API.</p>
<aside>A medida que se desplaza, verá ejemplos de código para trabajar con la API.</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost:8000</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="business-line">Business Line</h1>

    

            <h2 id="business-line-GETapi-businessLine">GET api/businessLine</h2>

<p>
</p>



<span id="example-requests-GETapi-businessLine">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/businessLine',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-businessLine">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;SyC Group&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;SyC Group&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-businessLine" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-businessLine"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-businessLine"></code></pre>
</span>
<span id="execution-error-GETapi-businessLine" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-businessLine"></code></pre>
</span>
<form id="form-GETapi-businessLine" data-method="GET"
      data-path="api/businessLine"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-businessLine', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-businessLine"
                    onclick="tryItOut('GETapi-businessLine');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-businessLine"
                    onclick="cancelTryOut('GETapi-businessLine');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-businessLine" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/businessLine</code></b>
        </p>
                    </form>

            <h2 id="business-line-POSTapi-businessLine">POST api/businessLine</h2>

<p>
</p>



<span id="example-requests-POSTapi-businessLine">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/businessLine',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-businessLine">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;SyC Group&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-businessLine" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-businessLine"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-businessLine"></code></pre>
</span>
<span id="execution-error-POSTapi-businessLine" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-businessLine"></code></pre>
</span>
<form id="form-POSTapi-businessLine" data-method="POST"
      data-path="api/businessLine"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-businessLine', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-businessLine"
                    onclick="tryItOut('POSTapi-businessLine');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-businessLine"
                    onclick="cancelTryOut('POSTapi-businessLine');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-businessLine" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/businessLine</code></b>
        </p>
                    </form>

            <h2 id="business-line-GETapi-businessLine--id-">GET api/businessLine/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-businessLine--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/businessLine/20',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-businessLine--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;SyC Group&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-businessLine--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-businessLine--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-businessLine--id-"></code></pre>
</span>
<span id="execution-error-GETapi-businessLine--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-businessLine--id-"></code></pre>
</span>
<form id="form-GETapi-businessLine--id-" data-method="GET"
      data-path="api/businessLine/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-businessLine--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-businessLine--id-"
                    onclick="tryItOut('GETapi-businessLine--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-businessLine--id-"
                    onclick="cancelTryOut('GETapi-businessLine--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-businessLine--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/businessLine/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-businessLine--id-"
               value="20"
               data-component="url" hidden>
    <br>
<p>The ID of the businessLine.</p>
            </p>
                    </form>

            <h2 id="business-line-PUTapi-businessLine--id-">PUT api/businessLine/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-businessLine--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/businessLine/4',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'SyC Group',
            'active' =&gt; true,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-businessLine--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;SyC Group&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-businessLine--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-businessLine--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-businessLine--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-businessLine--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-businessLine--id-"></code></pre>
</span>
<form id="form-PUTapi-businessLine--id-" data-method="PUT"
      data-path="api/businessLine/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-businessLine--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-businessLine--id-"
                    onclick="tryItOut('PUTapi-businessLine--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-businessLine--id-"
                    onclick="cancelTryOut('PUTapi-businessLine--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-businessLine--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/businessLine/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/businessLine/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-businessLine--id-"
               value="4"
               data-component="url" hidden>
    <br>
<p>The ID of the businessLine.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-businessLine--id-"
               value="SyC Group"
               data-component="body" hidden>
    <br>
<p>El nombre de la linea de negocions.</p>
        </p>
                <p>
            <b><code>active</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-businessLine--id-" hidden>
            <input type="radio" name="active"
                   value="true"
                   data-endpoint="PUTapi-businessLine--id-"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-businessLine--id-" hidden>
            <input type="radio" name="active"
                   value="false"
                   data-endpoint="PUTapi-businessLine--id-"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>
<p>El estado de la linea de negocios, si esta activa o no.</p>
        </p>
        </form>

            <h2 id="business-line-DELETEapi-businessLine--id-">DELETE api/businessLine/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-businessLine--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/businessLine/3',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-businessLine--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;SyC Group&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-businessLine--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-businessLine--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-businessLine--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-businessLine--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-businessLine--id-"></code></pre>
</span>
<form id="form-DELETEapi-businessLine--id-" data-method="DELETE"
      data-path="api/businessLine/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-businessLine--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-businessLine--id-"
                    onclick="tryItOut('DELETEapi-businessLine--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-businessLine--id-"
                    onclick="cancelTryOut('DELETEapi-businessLine--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-businessLine--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/businessLine/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-businessLine--id-"
               value="3"
               data-component="url" hidden>
    <br>
<p>The ID of the businessLine.</p>
            </p>
                    </form>

        <h1 id="city">City</h1>

    

            <h2 id="city-GETapi-city">GET api/city</h2>

<p>
</p>



<span id="example-requests-GETapi-city">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/city',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'name'=&gt; 'Pereira',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-city">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Medell&iacute;n&quot;,
            &quot;province&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Antioquia&quot;,
                &quot;prefix&quot;: 606,
                &quot;active&quot;: 1
            },
            &quot;active&quot;: 1
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Medell&iacute;n&quot;,
            &quot;province&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Antioquia&quot;,
                &quot;prefix&quot;: 606,
                &quot;active&quot;: 1
            },
            &quot;active&quot;: 1
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-city" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-city"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-city"></code></pre>
</span>
<span id="execution-error-GETapi-city" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-city"></code></pre>
</span>
<form id="form-GETapi-city" data-method="GET"
      data-path="api/city"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-city', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-city"
                    onclick="tryItOut('GETapi-city');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-city"
                    onclick="cancelTryOut('GETapi-city');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-city" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/city</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="GETapi-city"
               value="Pereira"
               data-component="query" hidden>
    <br>
<p>Filtro para buscar ciudades por nombre.</p>
            </p>
                </form>

        <h1 id="civil-status">Civil Status</h1>

    

            <h2 id="civil-status-GETapi-civilStatus">GET api/civilStatus</h2>

<p>
</p>



<span id="example-requests-GETapi-civilStatus">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/civilStatus',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-civilStatus">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Soltero&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Soltero&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-civilStatus" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-civilStatus"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-civilStatus"></code></pre>
</span>
<span id="execution-error-GETapi-civilStatus" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-civilStatus"></code></pre>
</span>
<form id="form-GETapi-civilStatus" data-method="GET"
      data-path="api/civilStatus"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-civilStatus', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-civilStatus"
                    onclick="tryItOut('GETapi-civilStatus');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-civilStatus"
                    onclick="cancelTryOut('GETapi-civilStatus');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-civilStatus" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/civilStatus</code></b>
        </p>
                    </form>

        <h1 id="concept">Concept</h1>

    

            <h2 id="concept-GETapi-concept">GET api/concept</h2>

<p>
</p>



<span id="example-requests-GETapi-concept">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/concept',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'type'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-concept">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Salario basico&quot;,
            &quot;calculated&quot;: 0,
            &quot;conceptType&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Devengado&quot;
            },
            &quot;setting&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Salario minimo&quot;,
                &quot;value&quot;: 908526
            }
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Salario basico&quot;,
            &quot;calculated&quot;: 0,
            &quot;conceptType&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Devengado&quot;
            },
            &quot;setting&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Salario minimo&quot;,
                &quot;value&quot;: 908526
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-concept" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-concept"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-concept"></code></pre>
</span>
<span id="execution-error-GETapi-concept" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-concept"></code></pre>
</span>
<form id="form-GETapi-concept" data-method="GET"
      data-path="api/concept"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-concept', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-concept"
                    onclick="tryItOut('GETapi-concept');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-concept"
                    onclick="cancelTryOut('GETapi-concept');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-concept" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/concept</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>type</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="type"
               data-endpoint="GETapi-concept"
               value="1"
               data-component="query" hidden>
    <br>
<p>Filtro para buscar por tipo, 1 = devengado, 2 = deducciones.</p>
            </p>
                </form>

            <h2 id="concept-POSTapi-concept">POST api/concept</h2>

<p>
</p>



<span id="example-requests-POSTapi-concept">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/concept',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; '',
            'calculated' =&gt; false,
            'concept_type_id' =&gt; 12,
            'setting_id' =&gt; 19,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-concept">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Salario basico&quot;,
        &quot;calculated&quot;: 0,
        &quot;conceptType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Devengado&quot;
        },
        &quot;setting&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Salario minimo&quot;,
            &quot;value&quot;: 908526
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-concept" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-concept"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-concept"></code></pre>
</span>
<span id="execution-error-POSTapi-concept" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-concept"></code></pre>
</span>
<form id="form-POSTapi-concept" data-method="POST"
      data-path="api/concept"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-concept', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-concept"
                    onclick="tryItOut('POSTapi-concept');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-concept"
                    onclick="cancelTryOut('POSTapi-concept');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-concept" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/concept</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-concept"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>calculated</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
                <label data-endpoint="POSTapi-concept" hidden>
            <input type="radio" name="calculated"
                   value="true"
                   data-endpoint="POSTapi-concept"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-concept" hidden>
            <input type="radio" name="calculated"
                   value="false"
                   data-endpoint="POSTapi-concept"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
                <p>
            <b><code>concept_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="concept_type_id"
               data-endpoint="POSTapi-concept"
               value="12"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>setting_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="setting_id"
               data-endpoint="POSTapi-concept"
               value="19"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="concept-GETapi-concept--id-">GET api/concept/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-concept--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/concept/14',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-concept--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Salario basico&quot;,
        &quot;calculated&quot;: 0,
        &quot;conceptType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Devengado&quot;
        },
        &quot;setting&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Salario minimo&quot;,
            &quot;value&quot;: 908526
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-concept--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-concept--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-concept--id-"></code></pre>
</span>
<span id="execution-error-GETapi-concept--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-concept--id-"></code></pre>
</span>
<form id="form-GETapi-concept--id-" data-method="GET"
      data-path="api/concept/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-concept--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-concept--id-"
                    onclick="tryItOut('GETapi-concept--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-concept--id-"
                    onclick="cancelTryOut('GETapi-concept--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-concept--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/concept/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-concept--id-"
               value="14"
               data-component="url" hidden>
    <br>
<p>The ID of the concept.</p>
            </p>
                    </form>

            <h2 id="concept-PUTapi-concept--id-">PUT api/concept/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-concept--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/concept/10',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'quibusdam',
            'calculated' =&gt; false,
            'concept_type_id' =&gt; 5,
            'setting_id' =&gt; 7,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-concept--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Salario basico&quot;,
        &quot;calculated&quot;: 0,
        &quot;conceptType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Devengado&quot;
        },
        &quot;setting&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Salario minimo&quot;,
            &quot;value&quot;: 908526
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-concept--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-concept--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-concept--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-concept--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-concept--id-"></code></pre>
</span>
<form id="form-PUTapi-concept--id-" data-method="PUT"
      data-path="api/concept/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-concept--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-concept--id-"
                    onclick="tryItOut('PUTapi-concept--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-concept--id-"
                    onclick="cancelTryOut('PUTapi-concept--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-concept--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/concept/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/concept/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-concept--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the concept.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-concept--id-"
               value="quibusdam"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>calculated</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-concept--id-" hidden>
            <input type="radio" name="calculated"
                   value="true"
                   data-endpoint="PUTapi-concept--id-"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-concept--id-" hidden>
            <input type="radio" name="calculated"
                   value="false"
                   data-endpoint="PUTapi-concept--id-"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
                <p>
            <b><code>concept_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="concept_type_id"
               data-endpoint="PUTapi-concept--id-"
               value="5"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>setting_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="setting_id"
               data-endpoint="PUTapi-concept--id-"
               value="7"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="concept-DELETEapi-concept--id-">DELETE api/concept/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-concept--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/concept/7',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-concept--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Salario basico&quot;,
        &quot;calculated&quot;: 0,
        &quot;conceptType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Devengado&quot;
        },
        &quot;setting&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Salario minimo&quot;,
            &quot;value&quot;: 908526
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-concept--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-concept--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-concept--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-concept--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-concept--id-"></code></pre>
</span>
<form id="form-DELETEapi-concept--id-" data-method="DELETE"
      data-path="api/concept/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-concept--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-concept--id-"
                    onclick="tryItOut('DELETEapi-concept--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-concept--id-"
                    onclick="cancelTryOut('DELETEapi-concept--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-concept--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/concept/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-concept--id-"
               value="7"
               data-component="url" hidden>
    <br>
<p>The ID of the concept.</p>
            </p>
                    </form>

        <h1 id="concept-type">Concept Type</h1>

    

            <h2 id="concept-type-GETapi-conceptType">GET api/conceptType</h2>

<p>
</p>



<span id="example-requests-GETapi-conceptType">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/conceptType',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-conceptType">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Devengado&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Devengado&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-conceptType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-conceptType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-conceptType"></code></pre>
</span>
<span id="execution-error-GETapi-conceptType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-conceptType"></code></pre>
</span>
<form id="form-GETapi-conceptType" data-method="GET"
      data-path="api/conceptType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-conceptType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-conceptType"
                    onclick="tryItOut('GETapi-conceptType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-conceptType"
                    onclick="cancelTryOut('GETapi-conceptType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-conceptType" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/conceptType</code></b>
        </p>
                    </form>

            <h2 id="concept-type-POSTapi-conceptType">POST api/conceptType</h2>

<p>
</p>



<span id="example-requests-POSTapi-conceptType">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/conceptType',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Devengado',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-conceptType">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Devengado&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-conceptType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-conceptType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-conceptType"></code></pre>
</span>
<span id="execution-error-POSTapi-conceptType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-conceptType"></code></pre>
</span>
<form id="form-POSTapi-conceptType" data-method="POST"
      data-path="api/conceptType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-conceptType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-conceptType"
                    onclick="tryItOut('POSTapi-conceptType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-conceptType"
                    onclick="cancelTryOut('POSTapi-conceptType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-conceptType" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/conceptType</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-conceptType"
               value="Devengado"
               data-component="body" hidden>
    <br>
<p>El tipo de concepto, ya viene definido (Deduccion, devengado).</p>
        </p>
        </form>

            <h2 id="concept-type-GETapi-conceptType--id-">GET api/conceptType/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-conceptType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/conceptType/17',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-conceptType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Devengado&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-conceptType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-conceptType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-conceptType--id-"></code></pre>
</span>
<span id="execution-error-GETapi-conceptType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-conceptType--id-"></code></pre>
</span>
<form id="form-GETapi-conceptType--id-" data-method="GET"
      data-path="api/conceptType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-conceptType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-conceptType--id-"
                    onclick="tryItOut('GETapi-conceptType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-conceptType--id-"
                    onclick="cancelTryOut('GETapi-conceptType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-conceptType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/conceptType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-conceptType--id-"
               value="17"
               data-component="url" hidden>
    <br>
<p>The ID of the conceptType.</p>
            </p>
                    </form>

            <h2 id="concept-type-PUTapi-conceptType--id-">PUT api/conceptType/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-conceptType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/conceptType/6',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Devengado',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-conceptType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Devengado&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-conceptType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-conceptType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-conceptType--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-conceptType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-conceptType--id-"></code></pre>
</span>
<form id="form-PUTapi-conceptType--id-" data-method="PUT"
      data-path="api/conceptType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-conceptType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-conceptType--id-"
                    onclick="tryItOut('PUTapi-conceptType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-conceptType--id-"
                    onclick="cancelTryOut('PUTapi-conceptType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-conceptType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/conceptType/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/conceptType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-conceptType--id-"
               value="6"
               data-component="url" hidden>
    <br>
<p>The ID of the conceptType.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-conceptType--id-"
               value="Devengado"
               data-component="body" hidden>
    <br>
<p>El tipo de concepto, ya viene definido (Deduccion, devengado).</p>
        </p>
        </form>

            <h2 id="concept-type-DELETEapi-conceptType--id-">DELETE api/conceptType/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-conceptType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/conceptType/14',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-conceptType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Devengado&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-conceptType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-conceptType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-conceptType--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-conceptType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-conceptType--id-"></code></pre>
</span>
<form id="form-DELETEapi-conceptType--id-" data-method="DELETE"
      data-path="api/conceptType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-conceptType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-conceptType--id-"
                    onclick="tryItOut('DELETEapi-conceptType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-conceptType--id-"
                    onclick="cancelTryOut('DELETEapi-conceptType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-conceptType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/conceptType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-conceptType--id-"
               value="14"
               data-component="url" hidden>
    <br>
<p>The ID of the conceptType.</p>
            </p>
                    </form>

        <h1 id="constitutiontype">ConstitutionType</h1>

    

            <h2 id="constitutiontype-GETapi-constitutionType">GET api/constitutionType</h2>

<p>
</p>



<span id="example-requests-GETapi-constitutionType">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/constitutionType',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-constitutionType">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Natural&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Natural&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-constitutionType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-constitutionType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-constitutionType"></code></pre>
</span>
<span id="execution-error-GETapi-constitutionType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-constitutionType"></code></pre>
</span>
<form id="form-GETapi-constitutionType" data-method="GET"
      data-path="api/constitutionType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-constitutionType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-constitutionType"
                    onclick="tryItOut('GETapi-constitutionType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-constitutionType"
                    onclick="cancelTryOut('GETapi-constitutionType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-constitutionType" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/constitutionType</code></b>
        </p>
                    </form>

        <h1 id="contact">Contact</h1>

    

            <h2 id="contact-GETapi-contact">GET api/contact</h2>

<p>
</p>



<span id="example-requests-GETapi-contact">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/contact',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-contact">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: null,
            &quot;name&quot;: null,
            &quot;last_name&quot;: null,
            &quot;provider&quot;: null
        },
        {
            &quot;id&quot;: null,
            &quot;name&quot;: null,
            &quot;last_name&quot;: null,
            &quot;provider&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-contact" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-contact"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-contact"></code></pre>
</span>
<span id="execution-error-GETapi-contact" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-contact"></code></pre>
</span>
<form id="form-GETapi-contact" data-method="GET"
      data-path="api/contact"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-contact', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-contact"
                    onclick="tryItOut('GETapi-contact');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-contact"
                    onclick="cancelTryOut('GETapi-contact');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-contact" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/contact</code></b>
        </p>
                    </form>

            <h2 id="contact-POSTapi-contact">POST api/contact</h2>

<p>
</p>



<span id="example-requests-POSTapi-contact">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/contact',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-contact">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;name&quot;: null,
        &quot;last_name&quot;: null,
        &quot;email&quot;: null,
        &quot;position&quot;: null,
        &quot;phone&quot;: null,
        &quot;provider&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-contact" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-contact"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-contact"></code></pre>
</span>
<span id="execution-error-POSTapi-contact" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-contact"></code></pre>
</span>
<form id="form-POSTapi-contact" data-method="POST"
      data-path="api/contact"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-contact', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-contact"
                    onclick="tryItOut('POSTapi-contact');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-contact"
                    onclick="cancelTryOut('POSTapi-contact');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-contact" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/contact</code></b>
        </p>
                    </form>

            <h2 id="contact-GETapi-contact--id-">GET api/contact/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-contact--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/contact/5',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-contact--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;name&quot;: null,
        &quot;last_name&quot;: null,
        &quot;email&quot;: null,
        &quot;position&quot;: null,
        &quot;phone&quot;: null,
        &quot;provider&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-contact--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-contact--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-contact--id-"></code></pre>
</span>
<span id="execution-error-GETapi-contact--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-contact--id-"></code></pre>
</span>
<form id="form-GETapi-contact--id-" data-method="GET"
      data-path="api/contact/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-contact--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-contact--id-"
                    onclick="tryItOut('GETapi-contact--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-contact--id-"
                    onclick="cancelTryOut('GETapi-contact--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-contact--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/contact/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-contact--id-"
               value="5"
               data-component="url" hidden>
    <br>
<p>The ID of the contact.</p>
            </p>
                    </form>

            <h2 id="contact-PUTapi-contact--id-">PUT api/contact/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-contact--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/contact/8',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-contact--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;name&quot;: null,
        &quot;last_name&quot;: null,
        &quot;email&quot;: null,
        &quot;position&quot;: null,
        &quot;phone&quot;: null,
        &quot;provider&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-contact--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-contact--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-contact--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-contact--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-contact--id-"></code></pre>
</span>
<form id="form-PUTapi-contact--id-" data-method="PUT"
      data-path="api/contact/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-contact--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-contact--id-"
                    onclick="tryItOut('PUTapi-contact--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-contact--id-"
                    onclick="cancelTryOut('PUTapi-contact--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-contact--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/contact/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/contact/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-contact--id-"
               value="8"
               data-component="url" hidden>
    <br>
<p>The ID of the contact.</p>
            </p>
                    </form>

            <h2 id="contact-DELETEapi-contact--id-">DELETE api/contact/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-contact--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/contact/2',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-contact--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;name&quot;: null,
        &quot;last_name&quot;: null,
        &quot;email&quot;: null,
        &quot;position&quot;: null,
        &quot;phone&quot;: null,
        &quot;provider&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-contact--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-contact--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-contact--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-contact--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-contact--id-"></code></pre>
</span>
<form id="form-DELETEapi-contact--id-" data-method="DELETE"
      data-path="api/contact/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-contact--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-contact--id-"
                    onclick="tryItOut('DELETEapi-contact--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-contact--id-"
                    onclick="cancelTryOut('DELETEapi-contact--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-contact--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/contact/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-contact--id-"
               value="2"
               data-component="url" hidden>
    <br>
<p>The ID of the contact.</p>
            </p>
                    </form>

            <h2 id="contact-GETapi-contact-provider--provider_id-">GET api/contact/provider/{provider_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-contact-provider--provider_id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/contact/provider/12',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-contact-provider--provider_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;name&quot;: null,
        &quot;last_name&quot;: null,
        &quot;email&quot;: null,
        &quot;position&quot;: null,
        &quot;phone&quot;: null,
        &quot;provider&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-contact-provider--provider_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-contact-provider--provider_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-contact-provider--provider_id-"></code></pre>
</span>
<span id="execution-error-GETapi-contact-provider--provider_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-contact-provider--provider_id-"></code></pre>
</span>
<form id="form-GETapi-contact-provider--provider_id-" data-method="GET"
      data-path="api/contact/provider/{provider_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-contact-provider--provider_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-contact-provider--provider_id-"
                    onclick="tryItOut('GETapi-contact-provider--provider_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-contact-provider--provider_id-"
                    onclick="cancelTryOut('GETapi-contact-provider--provider_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-contact-provider--provider_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/contact/provider/{provider_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>provider_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="provider_id"
               data-endpoint="GETapi-contact-provider--provider_id-"
               value="12"
               data-component="url" hidden>
    <br>
<p>The ID of the provider.</p>
            </p>
                    </form>

        <h1 id="contract-type">Contract Type</h1>

    

            <h2 id="contract-type-GETapi-contractType">GET api/contractType</h2>

<p>
</p>



<span id="example-requests-GETapi-contractType">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/contractType',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-contractType">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Indefinido&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Indefinido&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-contractType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-contractType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-contractType"></code></pre>
</span>
<span id="execution-error-GETapi-contractType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-contractType"></code></pre>
</span>
<form id="form-GETapi-contractType" data-method="GET"
      data-path="api/contractType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-contractType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-contractType"
                    onclick="tryItOut('GETapi-contractType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-contractType"
                    onclick="cancelTryOut('GETapi-contractType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-contractType" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/contractType</code></b>
        </p>
                    </form>

            <h2 id="contract-type-POSTapi-contractType">POST api/contractType</h2>

<p>
</p>



<span id="example-requests-POSTapi-contractType">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/contractType',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Indefinido',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-contractType">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Indefinido&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-contractType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-contractType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-contractType"></code></pre>
</span>
<span id="execution-error-POSTapi-contractType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-contractType"></code></pre>
</span>
<form id="form-POSTapi-contractType" data-method="POST"
      data-path="api/contractType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-contractType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-contractType"
                    onclick="tryItOut('POSTapi-contractType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-contractType"
                    onclick="cancelTryOut('POSTapi-contractType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-contractType" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/contractType</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-contractType"
               value="Indefinido"
               data-component="body" hidden>
    <br>
<p>El nombre del contrato.</p>
        </p>
        </form>

            <h2 id="contract-type-GETapi-contractType--id-">GET api/contractType/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-contractType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/contractType/5',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-contractType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Indefinido&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-contractType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-contractType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-contractType--id-"></code></pre>
</span>
<span id="execution-error-GETapi-contractType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-contractType--id-"></code></pre>
</span>
<form id="form-GETapi-contractType--id-" data-method="GET"
      data-path="api/contractType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-contractType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-contractType--id-"
                    onclick="tryItOut('GETapi-contractType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-contractType--id-"
                    onclick="cancelTryOut('GETapi-contractType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-contractType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/contractType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-contractType--id-"
               value="5"
               data-component="url" hidden>
    <br>
<p>The ID of the contractType.</p>
            </p>
                    </form>

            <h2 id="contract-type-PUTapi-contractType--id-">PUT api/contractType/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-contractType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/contractType/13',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-contractType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Indefinido&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-contractType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-contractType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-contractType--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-contractType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-contractType--id-"></code></pre>
</span>
<form id="form-PUTapi-contractType--id-" data-method="PUT"
      data-path="api/contractType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-contractType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-contractType--id-"
                    onclick="tryItOut('PUTapi-contractType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-contractType--id-"
                    onclick="cancelTryOut('PUTapi-contractType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-contractType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/contractType/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/contractType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-contractType--id-"
               value="13"
               data-component="url" hidden>
    <br>
<p>The ID of the contractType.</p>
            </p>
                    </form>

            <h2 id="contract-type-DELETEapi-contractType--id-">DELETE api/contractType/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-contractType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/contractType/17',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-contractType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Indefinido&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-contractType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-contractType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-contractType--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-contractType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-contractType--id-"></code></pre>
</span>
<form id="form-DELETEapi-contractType--id-" data-method="DELETE"
      data-path="api/contractType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-contractType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-contractType--id-"
                    onclick="tryItOut('DELETEapi-contractType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-contractType--id-"
                    onclick="cancelTryOut('DELETEapi-contractType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-contractType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/contractType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-contractType--id-"
               value="17"
               data-component="url" hidden>
    <br>
<p>The ID of the contractType.</p>
            </p>
                    </form>

        <h1 id="covenant">Covenant</h1>

    

            <h2 id="covenant-GETapi-covenant">GET api/covenant</h2>

<p>
</p>



<span id="example-requests-GETapi-covenant">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/covenant',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-covenant">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;prueba 1000&quot;,
            &quot;image&quot;: &quot;storage/covenants/1646072471_prueba_1000.jpeg&quot;,
            &quot;covenantType&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Cuota&quot;
            },
            &quot;concept&quot;: {
                &quot;id&quot;: 14,
                &quot;name&quot;: &quot;preuab 1000&quot;,
                &quot;calculated&quot;: 0,
                &quot;conceptType&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Deduccion&quot;
                },
                &quot;setting&quot;: null
            }
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;prueba 1000&quot;,
            &quot;image&quot;: &quot;storage/covenants/1646072471_prueba_1000.jpeg&quot;,
            &quot;covenantType&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Cuota&quot;
            },
            &quot;concept&quot;: {
                &quot;id&quot;: 14,
                &quot;name&quot;: &quot;preuab 1000&quot;,
                &quot;calculated&quot;: 0,
                &quot;conceptType&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Deduccion&quot;
                },
                &quot;setting&quot;: null
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-covenant" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-covenant"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-covenant"></code></pre>
</span>
<span id="execution-error-GETapi-covenant" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-covenant"></code></pre>
</span>
<form id="form-GETapi-covenant" data-method="GET"
      data-path="api/covenant"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-covenant', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-covenant"
                    onclick="tryItOut('GETapi-covenant');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-covenant"
                    onclick="cancelTryOut('GETapi-covenant');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-covenant" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/covenant</code></b>
        </p>
                    </form>

            <h2 id="covenant-POSTapi-covenant">POST api/covenant</h2>

<p>
</p>



<span id="example-requests-POSTapi-covenant">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/covenant',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'dolores',
            'value' =&gt; 7,
            'image' =&gt; 'nam',
            'covenant_type_id' =&gt; 8,
            'periodicity_type_id' =&gt; 10,
            'provider_id' =&gt; 1,
            'concept_name' =&gt; 'Cuota de convenio por salud',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-covenant">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;prueba 1000&quot;,
        &quot;active&quot;: 1,
        &quot;value&quot;: null,
        &quot;image&quot;: &quot;storage/covenants/1646072471_prueba_1000.jpeg&quot;,
        &quot;covenantType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Cuota&quot;
        },
        &quot;periodicityType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Quincenal&quot;
        },
        &quot;concept&quot;: {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;preuab 1000&quot;,
            &quot;calculated&quot;: 0,
            &quot;conceptType&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Deduccion&quot;
            },
            &quot;setting&quot;: null
        },
        &quot;provider&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Jhonatan&quot;,
            &quot;last_name&quot;: &quot;Gamboa&quot;,
            &quot;trade_name&quot;: &quot;Jhonata SAS&quot;,
            &quot;address&quot;: &quot;calle 13&quot;,
            &quot;phone&quot;: &quot;3113012618&quot;,
            &quot;identification_number&quot;: &quot;1232599679&quot;,
            &quot;iva&quot;: 1,
            &quot;email&quot;: &quot;jhonatan@gmail.com&quot;,
            &quot;identificationType&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;NIT&quot;
            },
            &quot;ConstitutionType&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Juridica&quot;
            },
            &quot;city&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Medell&iacute;n&quot;,
                &quot;province&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Antioquia&quot;,
                    &quot;prefix&quot;: 606,
                    &quot;active&quot;: 1
                },
                &quot;active&quot;: 1
            },
            &quot;responsabilityType&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Responsable de IVA&quot;
            }
        },
        &quot;users&quot;: []
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-covenant" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-covenant"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-covenant"></code></pre>
</span>
<span id="execution-error-POSTapi-covenant" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-covenant"></code></pre>
</span>
<form id="form-POSTapi-covenant" data-method="POST"
      data-path="api/covenant"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-covenant', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-covenant"
                    onclick="tryItOut('POSTapi-covenant');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-covenant"
                    onclick="cancelTryOut('POSTapi-covenant');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-covenant" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/covenant</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-covenant"
               value="dolores"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>value</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="value"
               data-endpoint="POSTapi-covenant"
               value="7"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="image"
               data-endpoint="POSTapi-covenant"
               value="nam"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>covenant_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="covenant_type_id"
               data-endpoint="POSTapi-covenant"
               value="8"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>periodicity_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="periodicity_type_id"
               data-endpoint="POSTapi-covenant"
               value="10"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>provider_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="provider_id"
               data-endpoint="POSTapi-covenant"
               value="1"
               data-component="body" hidden>
    <br>
<p>Es el id del proveedor.</p>
        </p>
                <p>
            <b><code>concept_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="concept_name"
               data-endpoint="POSTapi-covenant"
               value="Cuota de convenio por salud"
               data-component="body" hidden>
    <br>
<p>Es el nombre del concepto con el que se cargará en la nomina.</p>
        </p>
        </form>

            <h2 id="covenant-GETapi-covenant--id-">GET api/covenant/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-covenant--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/covenant/4',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-covenant--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;prueba 1000&quot;,
        &quot;active&quot;: 1,
        &quot;value&quot;: null,
        &quot;image&quot;: &quot;storage/covenants/1646072471_prueba_1000.jpeg&quot;,
        &quot;covenantType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Cuota&quot;
        },
        &quot;periodicityType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Quincenal&quot;
        },
        &quot;concept&quot;: {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;preuab 1000&quot;,
            &quot;calculated&quot;: 0,
            &quot;conceptType&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Deduccion&quot;
            },
            &quot;setting&quot;: null
        },
        &quot;provider&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Jhonatan&quot;,
            &quot;last_name&quot;: &quot;Gamboa&quot;,
            &quot;trade_name&quot;: &quot;Jhonata SAS&quot;,
            &quot;address&quot;: &quot;calle 13&quot;,
            &quot;phone&quot;: &quot;3113012618&quot;,
            &quot;identification_number&quot;: &quot;1232599679&quot;,
            &quot;iva&quot;: 1,
            &quot;email&quot;: &quot;jhonatan@gmail.com&quot;,
            &quot;identificationType&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;NIT&quot;
            },
            &quot;ConstitutionType&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Juridica&quot;
            },
            &quot;city&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Medell&iacute;n&quot;,
                &quot;province&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Antioquia&quot;,
                    &quot;prefix&quot;: 606,
                    &quot;active&quot;: 1
                },
                &quot;active&quot;: 1
            },
            &quot;responsabilityType&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Responsable de IVA&quot;
            }
        },
        &quot;users&quot;: []
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-covenant--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-covenant--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-covenant--id-"></code></pre>
</span>
<span id="execution-error-GETapi-covenant--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-covenant--id-"></code></pre>
</span>
<form id="form-GETapi-covenant--id-" data-method="GET"
      data-path="api/covenant/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-covenant--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-covenant--id-"
                    onclick="tryItOut('GETapi-covenant--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-covenant--id-"
                    onclick="cancelTryOut('GETapi-covenant--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-covenant--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/covenant/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-covenant--id-"
               value="4"
               data-component="url" hidden>
    <br>
<p>The ID of the covenant.</p>
            </p>
                    </form>

            <h2 id="covenant-PUTapi-covenant--id-">PUT api/covenant/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-covenant--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/covenant/20',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'aspernatur',
            'active' =&gt; false,
            'image' =&gt; 'tenetur',
            'covenant_type_id' =&gt; 1,
            'periodicity_type_id' =&gt; 11,
            'provider_id' =&gt; 7,
            'concept_name' =&gt; 'y',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-covenant--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;prueba 1000&quot;,
        &quot;active&quot;: 1,
        &quot;value&quot;: null,
        &quot;image&quot;: &quot;storage/covenants/1646072471_prueba_1000.jpeg&quot;,
        &quot;covenantType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Cuota&quot;
        },
        &quot;periodicityType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Quincenal&quot;
        },
        &quot;concept&quot;: {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;preuab 1000&quot;,
            &quot;calculated&quot;: 0,
            &quot;conceptType&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Deduccion&quot;
            },
            &quot;setting&quot;: null
        },
        &quot;provider&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Jhonatan&quot;,
            &quot;last_name&quot;: &quot;Gamboa&quot;,
            &quot;trade_name&quot;: &quot;Jhonata SAS&quot;,
            &quot;address&quot;: &quot;calle 13&quot;,
            &quot;phone&quot;: &quot;3113012618&quot;,
            &quot;identification_number&quot;: &quot;1232599679&quot;,
            &quot;iva&quot;: 1,
            &quot;email&quot;: &quot;jhonatan@gmail.com&quot;,
            &quot;identificationType&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;NIT&quot;
            },
            &quot;ConstitutionType&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Juridica&quot;
            },
            &quot;city&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Medell&iacute;n&quot;,
                &quot;province&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Antioquia&quot;,
                    &quot;prefix&quot;: 606,
                    &quot;active&quot;: 1
                },
                &quot;active&quot;: 1
            },
            &quot;responsabilityType&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Responsable de IVA&quot;
            }
        },
        &quot;users&quot;: []
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-covenant--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-covenant--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-covenant--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-covenant--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-covenant--id-"></code></pre>
</span>
<form id="form-PUTapi-covenant--id-" data-method="PUT"
      data-path="api/covenant/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-covenant--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-covenant--id-"
                    onclick="tryItOut('PUTapi-covenant--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-covenant--id-"
                    onclick="cancelTryOut('PUTapi-covenant--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-covenant--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/covenant/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/covenant/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-covenant--id-"
               value="20"
               data-component="url" hidden>
    <br>
<p>The ID of the covenant.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-covenant--id-"
               value="aspernatur"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>active</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-covenant--id-" hidden>
            <input type="radio" name="active"
                   value="true"
                   data-endpoint="PUTapi-covenant--id-"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-covenant--id-" hidden>
            <input type="radio" name="active"
                   value="false"
                   data-endpoint="PUTapi-covenant--id-"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
                <p>
            <b><code>0</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="0"
               data-endpoint="PUTapi-covenant--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="image"
               data-endpoint="PUTapi-covenant--id-"
               value="tenetur"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>covenant_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="covenant_type_id"
               data-endpoint="PUTapi-covenant--id-"
               value="1"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>periodicity_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="periodicity_type_id"
               data-endpoint="PUTapi-covenant--id-"
               value="11"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>provider_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="provider_id"
               data-endpoint="PUTapi-covenant--id-"
               value="7"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>concept_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="concept_name"
               data-endpoint="PUTapi-covenant--id-"
               value="y"
               data-component="body" hidden>
    <br>
<p>Must be at least 3 characters.</p>
        </p>
        </form>

            <h2 id="covenant-DELETEapi-covenant--id-">DELETE api/covenant/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-covenant--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/covenant/3',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-covenant--id-">
</span>
<span id="execution-results-DELETEapi-covenant--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-covenant--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-covenant--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-covenant--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-covenant--id-"></code></pre>
</span>
<form id="form-DELETEapi-covenant--id-" data-method="DELETE"
      data-path="api/covenant/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-covenant--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-covenant--id-"
                    onclick="tryItOut('DELETEapi-covenant--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-covenant--id-"
                    onclick="cancelTryOut('DELETEapi-covenant--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-covenant--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/covenant/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-covenant--id-"
               value="3"
               data-component="url" hidden>
    <br>
<p>The ID of the covenant.</p>
            </p>
                    </form>

            <h2 id="covenant-GETapi-consultaCovenant">GET api/consultaCovenant</h2>

<p>
</p>



<span id="example-requests-GETapi-consultaCovenant">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/consultaCovenant',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'covenant_id'=&gt; '1',
            'concept_type_id'=&gt; '1',
            'periodicity_type_id'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-consultaCovenant">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;prueba 1000&quot;,
        &quot;active&quot;: 1,
        &quot;value&quot;: null,
        &quot;image&quot;: &quot;storage/covenants/1646072471_prueba_1000.jpeg&quot;,
        &quot;covenantType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Cuota&quot;
        },
        &quot;periodicityType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Quincenal&quot;
        },
        &quot;concept&quot;: {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;preuab 1000&quot;,
            &quot;calculated&quot;: 0,
            &quot;conceptType&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Deduccion&quot;
            },
            &quot;setting&quot;: null
        },
        &quot;provider&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Jhonatan&quot;,
            &quot;last_name&quot;: &quot;Gamboa&quot;,
            &quot;trade_name&quot;: &quot;Jhonata SAS&quot;,
            &quot;address&quot;: &quot;calle 13&quot;,
            &quot;phone&quot;: &quot;3113012618&quot;,
            &quot;identification_number&quot;: &quot;1232599679&quot;,
            &quot;iva&quot;: 1,
            &quot;email&quot;: &quot;jhonatan@gmail.com&quot;,
            &quot;identificationType&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;NIT&quot;
            },
            &quot;ConstitutionType&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Juridica&quot;
            },
            &quot;city&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Medell&iacute;n&quot;,
                &quot;province&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Antioquia&quot;,
                    &quot;prefix&quot;: 606,
                    &quot;active&quot;: 1
                },
                &quot;active&quot;: 1
            },
            &quot;responsabilityType&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Responsable de IVA&quot;
            }
        },
        &quot;users&quot;: []
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-consultaCovenant" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-consultaCovenant"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-consultaCovenant"></code></pre>
</span>
<span id="execution-error-GETapi-consultaCovenant" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-consultaCovenant"></code></pre>
</span>
<form id="form-GETapi-consultaCovenant" data-method="GET"
      data-path="api/consultaCovenant"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-consultaCovenant', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-consultaCovenant"
                    onclick="tryItOut('GETapi-consultaCovenant');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-consultaCovenant"
                    onclick="cancelTryOut('GETapi-consultaCovenant');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-consultaCovenant" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/consultaCovenant</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>covenant_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="covenant_id"
               data-endpoint="GETapi-consultaCovenant"
               value="1"
               data-component="query" hidden>
    <br>
<p>ID de llave foranea para el convenio.</p>
            </p>
                    <p>
                <b><code>concept_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="concept_type_id"
               data-endpoint="GETapi-consultaCovenant"
               value="1"
               data-component="query" hidden>
    <br>
<p>ID de llave foranea para el tipo de concepto (deduccion, devengado).</p>
            </p>
                    <p>
                <b><code>periodicity_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="periodicity_type_id"
               data-endpoint="GETapi-consultaCovenant"
               value="1"
               data-component="query" hidden>
    <br>
<p>ID de llave foranea para el periodo (quincenal, mensual).</p>
            </p>
                </form>

        <h1 id="covenant-type">Covenant Type</h1>

    

            <h2 id="covenant-type-GETapi-covenantType">GET api/covenantType</h2>

<p>
</p>



<span id="example-requests-GETapi-covenantType">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/covenantType',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-covenantType">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Cuota&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Cuota&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-covenantType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-covenantType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-covenantType"></code></pre>
</span>
<span id="execution-error-GETapi-covenantType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-covenantType"></code></pre>
</span>
<form id="form-GETapi-covenantType" data-method="GET"
      data-path="api/covenantType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-covenantType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-covenantType"
                    onclick="tryItOut('GETapi-covenantType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-covenantType"
                    onclick="cancelTryOut('GETapi-covenantType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-covenantType" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/covenantType</code></b>
        </p>
                    </form>

            <h2 id="covenant-type-POSTapi-covenantType">POST api/covenantType</h2>

<p>
</p>



<span id="example-requests-POSTapi-covenantType">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/covenantType',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Cuotas',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-covenantType">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Cuota&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-covenantType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-covenantType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-covenantType"></code></pre>
</span>
<span id="execution-error-POSTapi-covenantType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-covenantType"></code></pre>
</span>
<form id="form-POSTapi-covenantType" data-method="POST"
      data-path="api/covenantType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-covenantType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-covenantType"
                    onclick="tryItOut('POSTapi-covenantType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-covenantType"
                    onclick="cancelTryOut('POSTapi-covenantType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-covenantType" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/covenantType</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-covenantType"
               value="Cuotas"
               data-component="body" hidden>
    <br>
<p>El nombre del tipo de convenio, cuotas o permanente, ya viene definido.</p>
        </p>
        </form>

            <h2 id="covenant-type-GETapi-covenantType--id-">GET api/covenantType/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-covenantType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/covenantType/11',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-covenantType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Cuota&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-covenantType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-covenantType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-covenantType--id-"></code></pre>
</span>
<span id="execution-error-GETapi-covenantType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-covenantType--id-"></code></pre>
</span>
<form id="form-GETapi-covenantType--id-" data-method="GET"
      data-path="api/covenantType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-covenantType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-covenantType--id-"
                    onclick="tryItOut('GETapi-covenantType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-covenantType--id-"
                    onclick="cancelTryOut('GETapi-covenantType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-covenantType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/covenantType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-covenantType--id-"
               value="11"
               data-component="url" hidden>
    <br>
<p>The ID of the covenantType.</p>
            </p>
                    </form>

            <h2 id="covenant-type-PUTapi-covenantType--id-">PUT api/covenantType/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-covenantType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/covenantType/16',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Cuotas',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-covenantType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Cuota&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-covenantType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-covenantType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-covenantType--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-covenantType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-covenantType--id-"></code></pre>
</span>
<form id="form-PUTapi-covenantType--id-" data-method="PUT"
      data-path="api/covenantType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-covenantType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-covenantType--id-"
                    onclick="tryItOut('PUTapi-covenantType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-covenantType--id-"
                    onclick="cancelTryOut('PUTapi-covenantType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-covenantType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/covenantType/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/covenantType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-covenantType--id-"
               value="16"
               data-component="url" hidden>
    <br>
<p>The ID of the covenantType.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-covenantType--id-"
               value="Cuotas"
               data-component="body" hidden>
    <br>
<p>El nombre del tipo de convenio, cuotas o permanente, ya viene definido.</p>
        </p>
        </form>

            <h2 id="covenant-type-DELETEapi-covenantType--id-">DELETE api/covenantType/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-covenantType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/covenantType/13',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-covenantType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Cuota&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-covenantType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-covenantType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-covenantType--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-covenantType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-covenantType--id-"></code></pre>
</span>
<form id="form-DELETEapi-covenantType--id-" data-method="DELETE"
      data-path="api/covenantType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-covenantType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-covenantType--id-"
                    onclick="tryItOut('DELETEapi-covenantType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-covenantType--id-"
                    onclick="cancelTryOut('DELETEapi-covenantType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-covenantType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/covenantType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-covenantType--id-"
               value="13"
               data-component="url" hidden>
    <br>
<p>The ID of the covenantType.</p>
            </p>
                    </form>

        <h1 id="education-level">Education Level</h1>

    

            <h2 id="education-level-GETapi-educationLevel">GET api/educationLevel</h2>

<p>
</p>



<span id="example-requests-GETapi-educationLevel">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/educationLevel',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-educationLevel">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Basica&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Basica&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-educationLevel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-educationLevel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-educationLevel"></code></pre>
</span>
<span id="execution-error-GETapi-educationLevel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-educationLevel"></code></pre>
</span>
<form id="form-GETapi-educationLevel" data-method="GET"
      data-path="api/educationLevel"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-educationLevel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-educationLevel"
                    onclick="tryItOut('GETapi-educationLevel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-educationLevel"
                    onclick="cancelTryOut('GETapi-educationLevel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-educationLevel" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/educationLevel</code></b>
        </p>
                    </form>

        <h1 id="emergency-contact">Emergency Contact</h1>

    

            <h2 id="emergency-contact-GETapi-emergencyContact">GET api/emergencyContact</h2>

<p>
</p>



<span id="example-requests-GETapi-emergencyContact">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/emergencyContact',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-emergencyContact">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Patricia&quot;,
            &quot;phone&quot;: 3113012618,
            &quot;kinship&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Madre&quot;
            }
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Patricia&quot;,
            &quot;phone&quot;: 3113012618,
            &quot;kinship&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Madre&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-emergencyContact" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-emergencyContact"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-emergencyContact"></code></pre>
</span>
<span id="execution-error-GETapi-emergencyContact" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-emergencyContact"></code></pre>
</span>
<form id="form-GETapi-emergencyContact" data-method="GET"
      data-path="api/emergencyContact"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-emergencyContact', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-emergencyContact"
                    onclick="tryItOut('GETapi-emergencyContact');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-emergencyContact"
                    onclick="cancelTryOut('GETapi-emergencyContact');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-emergencyContact" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/emergencyContact</code></b>
        </p>
                    </form>

            <h2 id="emergency-contact-POSTapi-emergencyContact">POST api/emergencyContact</h2>

<p>
</p>



<span id="example-requests-POSTapi-emergencyContact">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/emergencyContact',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-emergencyContact">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Patricia&quot;,
        &quot;phone&quot;: 3113012618,
        &quot;kinship&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Madre&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-emergencyContact" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-emergencyContact"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-emergencyContact"></code></pre>
</span>
<span id="execution-error-POSTapi-emergencyContact" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-emergencyContact"></code></pre>
</span>
<form id="form-POSTapi-emergencyContact" data-method="POST"
      data-path="api/emergencyContact"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-emergencyContact', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-emergencyContact"
                    onclick="tryItOut('POSTapi-emergencyContact');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-emergencyContact"
                    onclick="cancelTryOut('POSTapi-emergencyContact');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-emergencyContact" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/emergencyContact</code></b>
        </p>
                    </form>

            <h2 id="emergency-contact-GETapi-emergencyContact--id-">GET api/emergencyContact/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-emergencyContact--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/emergencyContact/19',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-emergencyContact--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Patricia&quot;,
        &quot;phone&quot;: 3113012618,
        &quot;kinship&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Madre&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-emergencyContact--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-emergencyContact--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-emergencyContact--id-"></code></pre>
</span>
<span id="execution-error-GETapi-emergencyContact--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-emergencyContact--id-"></code></pre>
</span>
<form id="form-GETapi-emergencyContact--id-" data-method="GET"
      data-path="api/emergencyContact/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-emergencyContact--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-emergencyContact--id-"
                    onclick="tryItOut('GETapi-emergencyContact--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-emergencyContact--id-"
                    onclick="cancelTryOut('GETapi-emergencyContact--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-emergencyContact--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/emergencyContact/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-emergencyContact--id-"
               value="19"
               data-component="url" hidden>
    <br>
<p>The ID of the emergencyContact.</p>
            </p>
                    </form>

            <h2 id="emergency-contact-PUTapi-emergencyContact--id-">PUT api/emergencyContact/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-emergencyContact--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/emergencyContact/7',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-emergencyContact--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Patricia&quot;,
        &quot;phone&quot;: 3113012618,
        &quot;kinship&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Madre&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-emergencyContact--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-emergencyContact--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-emergencyContact--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-emergencyContact--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-emergencyContact--id-"></code></pre>
</span>
<form id="form-PUTapi-emergencyContact--id-" data-method="PUT"
      data-path="api/emergencyContact/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-emergencyContact--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-emergencyContact--id-"
                    onclick="tryItOut('PUTapi-emergencyContact--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-emergencyContact--id-"
                    onclick="cancelTryOut('PUTapi-emergencyContact--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-emergencyContact--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/emergencyContact/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/emergencyContact/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-emergencyContact--id-"
               value="7"
               data-component="url" hidden>
    <br>
<p>The ID of the emergencyContact.</p>
            </p>
                    </form>

            <h2 id="emergency-contact-DELETEapi-emergencyContact--id-">DELETE api/emergencyContact/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-emergencyContact--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/emergencyContact/19',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-emergencyContact--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Patricia&quot;,
        &quot;phone&quot;: 3113012618,
        &quot;kinship&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Madre&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-emergencyContact--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-emergencyContact--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-emergencyContact--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-emergencyContact--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-emergencyContact--id-"></code></pre>
</span>
<form id="form-DELETEapi-emergencyContact--id-" data-method="DELETE"
      data-path="api/emergencyContact/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-emergencyContact--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-emergencyContact--id-"
                    onclick="tryItOut('DELETEapi-emergencyContact--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-emergencyContact--id-"
                    onclick="cancelTryOut('DELETEapi-emergencyContact--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-emergencyContact--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/emergencyContact/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-emergencyContact--id-"
               value="19"
               data-component="url" hidden>
    <br>
<p>The ID of the emergencyContact.</p>
            </p>
                    </form>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-GETapi-checkLogin">GET api/checkLogin</h2>

<p>
</p>



<span id="example-requests-GETapi-checkLogin">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/checkLogin',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-checkLogin">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-checkLogin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-checkLogin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-checkLogin"></code></pre>
</span>
<span id="execution-error-GETapi-checkLogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-checkLogin"></code></pre>
</span>
<form id="form-GETapi-checkLogin" data-method="GET"
      data-path="api/checkLogin"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-checkLogin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-checkLogin"
                    onclick="tryItOut('GETapi-checkLogin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-checkLogin"
                    onclick="cancelTryOut('GETapi-checkLogin');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-checkLogin" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/checkLogin</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-responsabilityType">GET api/responsabilityType</h2>

<p>
</p>



<span id="example-requests-GETapi-responsabilityType">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/responsabilityType',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-responsabilityType">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Responsable de IVA&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Responsable de IVA&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-responsabilityType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-responsabilityType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-responsabilityType"></code></pre>
</span>
<span id="execution-error-GETapi-responsabilityType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-responsabilityType"></code></pre>
</span>
<form id="form-GETapi-responsabilityType" data-method="GET"
      data-path="api/responsabilityType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-responsabilityType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-responsabilityType"
                    onclick="tryItOut('GETapi-responsabilityType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-responsabilityType"
                    onclick="cancelTryOut('GETapi-responsabilityType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-responsabilityType" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/responsabilityType</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-usersColletion">GET api/usersColletion</h2>

<p>
</p>



<span id="example-requests-GETapi-usersColletion">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/usersColletion',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-usersColletion">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-usersColletion" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-usersColletion"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-usersColletion"></code></pre>
</span>
<span id="execution-error-GETapi-usersColletion" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-usersColletion"></code></pre>
</span>
<form id="form-GETapi-usersColletion" data-method="GET"
      data-path="api/usersColletion"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-usersColletion', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-usersColletion"
                    onclick="tryItOut('GETapi-usersColletion');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-usersColletion"
                    onclick="cancelTryOut('GETapi-usersColletion');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-usersColletion" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/usersColletion</code></b>
        </p>
                    </form>

        <h1 id="gender">Gender</h1>

    

            <h2 id="gender-GETapi-gender">GET api/gender</h2>

<p>
</p>



<span id="example-requests-GETapi-gender">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/gender',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-gender">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Masculino&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Masculino&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-gender" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-gender"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-gender"></code></pre>
</span>
<span id="execution-error-GETapi-gender" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-gender"></code></pre>
</span>
<form id="form-GETapi-gender" data-method="GET"
      data-path="api/gender"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-gender', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-gender"
                    onclick="tryItOut('GETapi-gender');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-gender"
                    onclick="cancelTryOut('GETapi-gender');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-gender" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/gender</code></b>
        </p>
                    </form>

        <h1 id="headquarter">Headquarter</h1>

    

            <h2 id="headquarter-GETapi-headquarter">GET api/headquarter</h2>

<p>
</p>



<span id="example-requests-GETapi-headquarter">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/headquarter',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-headquarter">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Pereira&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Pereira&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-headquarter" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-headquarter"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-headquarter"></code></pre>
</span>
<span id="execution-error-GETapi-headquarter" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-headquarter"></code></pre>
</span>
<form id="form-GETapi-headquarter" data-method="GET"
      data-path="api/headquarter"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-headquarter', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-headquarter"
                    onclick="tryItOut('GETapi-headquarter');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-headquarter"
                    onclick="cancelTryOut('GETapi-headquarter');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-headquarter" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/headquarter</code></b>
        </p>
                    </form>

            <h2 id="headquarter-POSTapi-headquarter">POST api/headquarter</h2>

<p>
</p>



<span id="example-requests-POSTapi-headquarter">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/headquarter',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Pereira',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-headquarter">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Pereira&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-headquarter" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-headquarter"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-headquarter"></code></pre>
</span>
<span id="execution-error-POSTapi-headquarter" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-headquarter"></code></pre>
</span>
<form id="form-POSTapi-headquarter" data-method="POST"
      data-path="api/headquarter"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-headquarter', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-headquarter"
                    onclick="tryItOut('POSTapi-headquarter');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-headquarter"
                    onclick="cancelTryOut('POSTapi-headquarter');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-headquarter" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/headquarter</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-headquarter"
               value="Pereira"
               data-component="body" hidden>
    <br>
<p>El nombre de la sucursal.</p>
        </p>
        </form>

            <h2 id="headquarter-GETapi-headquarter--id-">GET api/headquarter/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-headquarter--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/headquarter/16',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-headquarter--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Pereira&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-headquarter--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-headquarter--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-headquarter--id-"></code></pre>
</span>
<span id="execution-error-GETapi-headquarter--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-headquarter--id-"></code></pre>
</span>
<form id="form-GETapi-headquarter--id-" data-method="GET"
      data-path="api/headquarter/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-headquarter--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-headquarter--id-"
                    onclick="tryItOut('GETapi-headquarter--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-headquarter--id-"
                    onclick="cancelTryOut('GETapi-headquarter--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-headquarter--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/headquarter/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-headquarter--id-"
               value="16"
               data-component="url" hidden>
    <br>
<p>The ID of the headquarter.</p>
            </p>
                    </form>

            <h2 id="headquarter-PUTapi-headquarter--id-">PUT api/headquarter/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-headquarter--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/headquarter/11',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Pereira'."\n"
                .'* @apiResource App\\Http\\Resources\\HeadquarterResource',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-headquarter--id-">
</span>
<span id="execution-results-PUTapi-headquarter--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-headquarter--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-headquarter--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-headquarter--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-headquarter--id-"></code></pre>
</span>
<form id="form-PUTapi-headquarter--id-" data-method="PUT"
      data-path="api/headquarter/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-headquarter--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-headquarter--id-"
                    onclick="tryItOut('PUTapi-headquarter--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-headquarter--id-"
                    onclick="cancelTryOut('PUTapi-headquarter--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-headquarter--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/headquarter/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/headquarter/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-headquarter--id-"
               value="11"
               data-component="url" hidden>
    <br>
<p>The ID of the headquarter.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-headquarter--id-"
               value="Pereira
* @apiResource App\Http\Resources\HeadquarterResource"
               data-component="body" hidden>
    <br>
<p>El nombre de la sucursal.</p>
        </p>
        </form>

            <h2 id="headquarter-DELETEapi-headquarter--id-">DELETE api/headquarter/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-headquarter--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/headquarter/18',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-headquarter--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Pereira&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-headquarter--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-headquarter--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-headquarter--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-headquarter--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-headquarter--id-"></code></pre>
</span>
<form id="form-DELETEapi-headquarter--id-" data-method="DELETE"
      data-path="api/headquarter/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-headquarter--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-headquarter--id-"
                    onclick="tryItOut('DELETEapi-headquarter--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-headquarter--id-"
                    onclick="cancelTryOut('DELETEapi-headquarter--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-headquarter--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/headquarter/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-headquarter--id-"
               value="18"
               data-component="url" hidden>
    <br>
<p>The ID of the headquarter.</p>
            </p>
                    </form>

        <h1 id="health-provider">Health Provider</h1>

    

            <h2 id="health-provider-GETapi-healthProvider">GET api/healthProvider</h2>

<p>
</p>



<span id="example-requests-GETapi-healthProvider">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/healthProvider',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-healthProvider">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Salud total&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Salud total&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-healthProvider" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-healthProvider"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-healthProvider"></code></pre>
</span>
<span id="execution-error-GETapi-healthProvider" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-healthProvider"></code></pre>
</span>
<form id="form-GETapi-healthProvider" data-method="GET"
      data-path="api/healthProvider"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-healthProvider', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-healthProvider"
                    onclick="tryItOut('GETapi-healthProvider');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-healthProvider"
                    onclick="cancelTryOut('GETapi-healthProvider');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-healthProvider" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/healthProvider</code></b>
        </p>
                    </form>

            <h2 id="health-provider-POSTapi-healthProvider">POST api/healthProvider</h2>

<p>
</p>



<span id="example-requests-POSTapi-healthProvider">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/healthProvider',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-healthProvider">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Salud total&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-healthProvider" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-healthProvider"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-healthProvider"></code></pre>
</span>
<span id="execution-error-POSTapi-healthProvider" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-healthProvider"></code></pre>
</span>
<form id="form-POSTapi-healthProvider" data-method="POST"
      data-path="api/healthProvider"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-healthProvider', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-healthProvider"
                    onclick="tryItOut('POSTapi-healthProvider');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-healthProvider"
                    onclick="cancelTryOut('POSTapi-healthProvider');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-healthProvider" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/healthProvider</code></b>
        </p>
                    </form>

            <h2 id="health-provider-GETapi-healthProvider--id-">GET api/healthProvider/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-healthProvider--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/healthProvider/2',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-healthProvider--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Salud total&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-healthProvider--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-healthProvider--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-healthProvider--id-"></code></pre>
</span>
<span id="execution-error-GETapi-healthProvider--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-healthProvider--id-"></code></pre>
</span>
<form id="form-GETapi-healthProvider--id-" data-method="GET"
      data-path="api/healthProvider/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-healthProvider--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-healthProvider--id-"
                    onclick="tryItOut('GETapi-healthProvider--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-healthProvider--id-"
                    onclick="cancelTryOut('GETapi-healthProvider--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-healthProvider--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/healthProvider/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-healthProvider--id-"
               value="2"
               data-component="url" hidden>
    <br>
<p>The ID of the healthProvider.</p>
            </p>
                    </form>

            <h2 id="health-provider-PUTapi-healthProvider--id-">PUT api/healthProvider/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-healthProvider--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/healthProvider/14',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-healthProvider--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Salud total&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-healthProvider--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-healthProvider--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-healthProvider--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-healthProvider--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-healthProvider--id-"></code></pre>
</span>
<form id="form-PUTapi-healthProvider--id-" data-method="PUT"
      data-path="api/healthProvider/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-healthProvider--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-healthProvider--id-"
                    onclick="tryItOut('PUTapi-healthProvider--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-healthProvider--id-"
                    onclick="cancelTryOut('PUTapi-healthProvider--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-healthProvider--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/healthProvider/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/healthProvider/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-healthProvider--id-"
               value="14"
               data-component="url" hidden>
    <br>
<p>The ID of the healthProvider.</p>
            </p>
                    </form>

            <h2 id="health-provider-DELETEapi-healthProvider--id-">DELETE api/healthProvider/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-healthProvider--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/healthProvider/20',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-healthProvider--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Salud total&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-healthProvider--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-healthProvider--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-healthProvider--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-healthProvider--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-healthProvider--id-"></code></pre>
</span>
<form id="form-DELETEapi-healthProvider--id-" data-method="DELETE"
      data-path="api/healthProvider/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-healthProvider--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-healthProvider--id-"
                    onclick="tryItOut('DELETEapi-healthProvider--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-healthProvider--id-"
                    onclick="cancelTryOut('DELETEapi-healthProvider--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-healthProvider--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/healthProvider/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-healthProvider--id-"
               value="20"
               data-component="url" hidden>
    <br>
<p>The ID of the healthProvider.</p>
            </p>
                    </form>

        <h1 id="identification-type">Identification Type</h1>

    

            <h2 id="identification-type-GETapi-identificationType">GET api/identificationType</h2>

<p>
</p>



<span id="example-requests-GETapi-identificationType">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/identificationType',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-identificationType">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Cedula de ciudadan&iacute;a&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Cedula de ciudadan&iacute;a&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-identificationType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-identificationType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-identificationType"></code></pre>
</span>
<span id="execution-error-GETapi-identificationType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-identificationType"></code></pre>
</span>
<form id="form-GETapi-identificationType" data-method="GET"
      data-path="api/identificationType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-identificationType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-identificationType"
                    onclick="tryItOut('GETapi-identificationType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-identificationType"
                    onclick="cancelTryOut('GETapi-identificationType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-identificationType" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/identificationType</code></b>
        </p>
                    </form>

            <h2 id="identification-type-POSTapi-identificationType">POST api/identificationType</h2>

<p>
</p>



<span id="example-requests-POSTapi-identificationType">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/identificationType',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Cedula de ciudadania',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-identificationType">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Cedula de ciudadan&iacute;a&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-identificationType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-identificationType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-identificationType"></code></pre>
</span>
<span id="execution-error-POSTapi-identificationType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-identificationType"></code></pre>
</span>
<form id="form-POSTapi-identificationType" data-method="POST"
      data-path="api/identificationType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-identificationType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-identificationType"
                    onclick="tryItOut('POSTapi-identificationType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-identificationType"
                    onclick="cancelTryOut('POSTapi-identificationType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-identificationType" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/identificationType</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-identificationType"
               value="Cedula de ciudadania"
               data-component="body" hidden>
    <br>
<p>El nombre del tipo de identificacion.</p>
        </p>
        </form>

            <h2 id="identification-type-GETapi-identificationType--id-">GET api/identificationType/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-identificationType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/identificationType/15',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-identificationType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Cedula de ciudadan&iacute;a&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-identificationType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-identificationType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-identificationType--id-"></code></pre>
</span>
<span id="execution-error-GETapi-identificationType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-identificationType--id-"></code></pre>
</span>
<form id="form-GETapi-identificationType--id-" data-method="GET"
      data-path="api/identificationType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-identificationType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-identificationType--id-"
                    onclick="tryItOut('GETapi-identificationType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-identificationType--id-"
                    onclick="cancelTryOut('GETapi-identificationType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-identificationType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/identificationType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-identificationType--id-"
               value="15"
               data-component="url" hidden>
    <br>
<p>The ID of the identificationType.</p>
            </p>
                    </form>

            <h2 id="identification-type-PUTapi-identificationType--id-">PUT api/identificationType/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-identificationType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/identificationType/10',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Cedula de ciudadania',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-identificationType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Cedula de ciudadan&iacute;a&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-identificationType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-identificationType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-identificationType--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-identificationType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-identificationType--id-"></code></pre>
</span>
<form id="form-PUTapi-identificationType--id-" data-method="PUT"
      data-path="api/identificationType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-identificationType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-identificationType--id-"
                    onclick="tryItOut('PUTapi-identificationType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-identificationType--id-"
                    onclick="cancelTryOut('PUTapi-identificationType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-identificationType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/identificationType/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/identificationType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-identificationType--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the identificationType.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-identificationType--id-"
               value="Cedula de ciudadania"
               data-component="body" hidden>
    <br>
<p>El nombre del tipo de identificacion.</p>
        </p>
        </form>

            <h2 id="identification-type-DELETEapi-identificationType--id-">DELETE api/identificationType/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-identificationType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/identificationType/13',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-identificationType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Cedula de ciudadan&iacute;a&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-identificationType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-identificationType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-identificationType--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-identificationType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-identificationType--id-"></code></pre>
</span>
<form id="form-DELETEapi-identificationType--id-" data-method="DELETE"
      data-path="api/identificationType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-identificationType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-identificationType--id-"
                    onclick="tryItOut('DELETEapi-identificationType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-identificationType--id-"
                    onclick="cancelTryOut('DELETEapi-identificationType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-identificationType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/identificationType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-identificationType--id-"
               value="13"
               data-component="url" hidden>
    <br>
<p>The ID of the identificationType.</p>
            </p>
                    </form>

        <h1 id="kinkship">Kinkship</h1>

    

            <h2 id="kinkship-GETapi-kinship">GET api/kinship</h2>

<p>
</p>



<span id="example-requests-GETapi-kinship">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/kinship',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-kinship">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Madre&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Madre&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-kinship" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-kinship"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-kinship"></code></pre>
</span>
<span id="execution-error-GETapi-kinship" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-kinship"></code></pre>
</span>
<form id="form-GETapi-kinship" data-method="GET"
      data-path="api/kinship"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-kinship', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-kinship"
                    onclick="tryItOut('GETapi-kinship');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-kinship"
                    onclick="cancelTryOut('GETapi-kinship');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-kinship" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/kinship</code></b>
        </p>
                    </form>

        <h1 id="occupational-risk-manager">Occupational Risk Manager</h1>

    

            <h2 id="occupational-risk-manager-GETapi-ocupationalRiskManager">GET api/ocupationalRiskManager</h2>

<p>
</p>



<span id="example-requests-GETapi-ocupationalRiskManager">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/ocupationalRiskManager',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-ocupationalRiskManager">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;class&quot;: &quot;CLASE I&quot;,
            &quot;name&quot;: &quot;Riesgo m&iacute;nimo&quot;,
            &quot;porcentage&quot;: 0.522
        },
        {
            &quot;id&quot;: 1,
            &quot;class&quot;: &quot;CLASE I&quot;,
            &quot;name&quot;: &quot;Riesgo m&iacute;nimo&quot;,
            &quot;porcentage&quot;: 0.522
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-ocupationalRiskManager" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-ocupationalRiskManager"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-ocupationalRiskManager"></code></pre>
</span>
<span id="execution-error-GETapi-ocupationalRiskManager" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-ocupationalRiskManager"></code></pre>
</span>
<form id="form-GETapi-ocupationalRiskManager" data-method="GET"
      data-path="api/ocupationalRiskManager"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-ocupationalRiskManager', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-ocupationalRiskManager"
                    onclick="tryItOut('GETapi-ocupationalRiskManager');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-ocupationalRiskManager"
                    onclick="cancelTryOut('GETapi-ocupationalRiskManager');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-ocupationalRiskManager" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/ocupationalRiskManager</code></b>
        </p>
                    </form>

        <h1 id="payroll">Payroll</h1>

    

            <h2 id="payroll-GETapi-payroll">GET api/payroll</h2>

<p>
</p>



<span id="example-requests-GETapi-payroll">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/payroll',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-payroll">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;period&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;16 a 30&quot;
            },
            &quot;user&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Michael&quot;,
                &quot;last_name&quot;: &quot;Moncada&quot;,
                &quot;identification_number&quot;: &quot;1088355971&quot;,
                &quot;active&quot;: 1,
                &quot;email&quot;: &quot;lider.desarrollo@sycgroup.co&quot;,
                &quot;base_salary&quot;: 1000000,
                &quot;position&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Gerente&quot;
                }
            },
            &quot;provision&quot;: {
                &quot;id&quot;: 1,
                &quot;period&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;16 a 30&quot;
                },
                &quot;pension_contribution&quot;: null,
                &quot;occupational_risk_contributions&quot;: null,
                &quot;health_contribution&quot;: null,
                &quot;compensation_funds&quot;: null,
                &quot;layoffs&quot;: null,
                &quot;Interest_on_severance_pay&quot;: null,
                &quot;vacation_provision&quot;: null,
                &quot;wage_premium&quot;: null,
                &quot;total_provisions&quot;: null,
                &quot;total_payroll&quot;: null
            },
            &quot;concepts&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                    &quot;calculated&quot;: 0,
                    &quot;setting_id&quot;: 2,
                    &quot;concept_type_id&quot;: 1,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null,
                    &quot;pivot&quot;: {
                        &quot;payroll_id&quot;: 1,
                        &quot;concept_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2022-02-28T18:49:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-02-28T18:49:07.000000Z&quot;,
                        &quot;count&quot;: 1,
                        &quot;unit_value&quot;: 30000,
                        &quot;total_value&quot;: 30000,
                        &quot;id&quot;: 2
                    }
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                    &quot;calculated&quot;: 0,
                    &quot;setting_id&quot;: 2,
                    &quot;concept_type_id&quot;: 1,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null,
                    &quot;pivot&quot;: {
                        &quot;payroll_id&quot;: 1,
                        &quot;concept_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2022-02-28T18:49:28.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-02-28T18:49:28.000000Z&quot;,
                        &quot;count&quot;: 1,
                        &quot;unit_value&quot;: 30000,
                        &quot;total_value&quot;: 30000,
                        &quot;id&quot;: 3
                    }
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                    &quot;calculated&quot;: 0,
                    &quot;setting_id&quot;: 2,
                    &quot;concept_type_id&quot;: 1,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null,
                    &quot;pivot&quot;: {
                        &quot;payroll_id&quot;: 1,
                        &quot;concept_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2022-02-28T18:50:32.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-02-28T18:50:32.000000Z&quot;,
                        &quot;count&quot;: 1,
                        &quot;unit_value&quot;: 30000,
                        &quot;total_value&quot;: 30000,
                        &quot;id&quot;: 4
                    }
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                    &quot;calculated&quot;: 0,
                    &quot;setting_id&quot;: 2,
                    &quot;concept_type_id&quot;: 1,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null,
                    &quot;pivot&quot;: {
                        &quot;payroll_id&quot;: 1,
                        &quot;concept_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2022-02-28T18:51:30.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-02-28T18:51:30.000000Z&quot;,
                        &quot;count&quot;: 1,
                        &quot;unit_value&quot;: 30000,
                        &quot;total_value&quot;: 30000,
                        &quot;id&quot;: 5
                    }
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                    &quot;calculated&quot;: 0,
                    &quot;setting_id&quot;: 2,
                    &quot;concept_type_id&quot;: 1,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null,
                    &quot;pivot&quot;: {
                        &quot;payroll_id&quot;: 1,
                        &quot;concept_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2022-02-28T18:51:48.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-02-28T18:51:48.000000Z&quot;,
                        &quot;count&quot;: 1,
                        &quot;unit_value&quot;: 30000,
                        &quot;total_value&quot;: 30000,
                        &quot;id&quot;: 6
                    }
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                    &quot;calculated&quot;: 0,
                    &quot;setting_id&quot;: 2,
                    &quot;concept_type_id&quot;: 1,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null,
                    &quot;pivot&quot;: {
                        &quot;payroll_id&quot;: 1,
                        &quot;concept_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2022-02-28T19:04:44.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-02-28T19:04:44.000000Z&quot;,
                        &quot;count&quot;: 1,
                        &quot;unit_value&quot;: 30000,
                        &quot;total_value&quot;: 30000,
                        &quot;id&quot;: 7
                    }
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                    &quot;calculated&quot;: 0,
                    &quot;setting_id&quot;: 2,
                    &quot;concept_type_id&quot;: 1,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null,
                    &quot;pivot&quot;: {
                        &quot;payroll_id&quot;: 1,
                        &quot;concept_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2022-02-28T19:05:29.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-02-28T19:05:29.000000Z&quot;,
                        &quot;count&quot;: 1,
                        &quot;unit_value&quot;: 30000,
                        &quot;total_value&quot;: 30000,
                        &quot;id&quot;: 8
                    }
                }
            ]
        },
        {
            &quot;id&quot;: 1,
            &quot;period&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;16 a 30&quot;
            },
            &quot;user&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Michael&quot;,
                &quot;last_name&quot;: &quot;Moncada&quot;,
                &quot;identification_number&quot;: &quot;1088355971&quot;,
                &quot;active&quot;: 1,
                &quot;email&quot;: &quot;lider.desarrollo@sycgroup.co&quot;,
                &quot;base_salary&quot;: 1000000,
                &quot;position&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Gerente&quot;
                }
            },
            &quot;provision&quot;: {
                &quot;id&quot;: 1,
                &quot;period&quot;: {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;16 a 30&quot;
                },
                &quot;pension_contribution&quot;: null,
                &quot;occupational_risk_contributions&quot;: null,
                &quot;health_contribution&quot;: null,
                &quot;compensation_funds&quot;: null,
                &quot;layoffs&quot;: null,
                &quot;Interest_on_severance_pay&quot;: null,
                &quot;vacation_provision&quot;: null,
                &quot;wage_premium&quot;: null,
                &quot;total_provisions&quot;: null,
                &quot;total_payroll&quot;: null
            },
            &quot;concepts&quot;: [
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                    &quot;calculated&quot;: 0,
                    &quot;setting_id&quot;: 2,
                    &quot;concept_type_id&quot;: 1,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null,
                    &quot;pivot&quot;: {
                        &quot;payroll_id&quot;: 1,
                        &quot;concept_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2022-02-28T18:49:07.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-02-28T18:49:07.000000Z&quot;,
                        &quot;count&quot;: 1,
                        &quot;unit_value&quot;: 30000,
                        &quot;total_value&quot;: 30000,
                        &quot;id&quot;: 2
                    }
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                    &quot;calculated&quot;: 0,
                    &quot;setting_id&quot;: 2,
                    &quot;concept_type_id&quot;: 1,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null,
                    &quot;pivot&quot;: {
                        &quot;payroll_id&quot;: 1,
                        &quot;concept_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2022-02-28T18:49:28.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-02-28T18:49:28.000000Z&quot;,
                        &quot;count&quot;: 1,
                        &quot;unit_value&quot;: 30000,
                        &quot;total_value&quot;: 30000,
                        &quot;id&quot;: 3
                    }
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                    &quot;calculated&quot;: 0,
                    &quot;setting_id&quot;: 2,
                    &quot;concept_type_id&quot;: 1,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null,
                    &quot;pivot&quot;: {
                        &quot;payroll_id&quot;: 1,
                        &quot;concept_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2022-02-28T18:50:32.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-02-28T18:50:32.000000Z&quot;,
                        &quot;count&quot;: 1,
                        &quot;unit_value&quot;: 30000,
                        &quot;total_value&quot;: 30000,
                        &quot;id&quot;: 4
                    }
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                    &quot;calculated&quot;: 0,
                    &quot;setting_id&quot;: 2,
                    &quot;concept_type_id&quot;: 1,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null,
                    &quot;pivot&quot;: {
                        &quot;payroll_id&quot;: 1,
                        &quot;concept_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2022-02-28T18:51:30.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-02-28T18:51:30.000000Z&quot;,
                        &quot;count&quot;: 1,
                        &quot;unit_value&quot;: 30000,
                        &quot;total_value&quot;: 30000,
                        &quot;id&quot;: 5
                    }
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                    &quot;calculated&quot;: 0,
                    &quot;setting_id&quot;: 2,
                    &quot;concept_type_id&quot;: 1,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null,
                    &quot;pivot&quot;: {
                        &quot;payroll_id&quot;: 1,
                        &quot;concept_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2022-02-28T18:51:48.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-02-28T18:51:48.000000Z&quot;,
                        &quot;count&quot;: 1,
                        &quot;unit_value&quot;: 30000,
                        &quot;total_value&quot;: 30000,
                        &quot;id&quot;: 6
                    }
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                    &quot;calculated&quot;: 0,
                    &quot;setting_id&quot;: 2,
                    &quot;concept_type_id&quot;: 1,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null,
                    &quot;pivot&quot;: {
                        &quot;payroll_id&quot;: 1,
                        &quot;concept_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2022-02-28T19:04:44.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-02-28T19:04:44.000000Z&quot;,
                        &quot;count&quot;: 1,
                        &quot;unit_value&quot;: 30000,
                        &quot;total_value&quot;: 30000,
                        &quot;id&quot;: 7
                    }
                },
                {
                    &quot;id&quot;: 2,
                    &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                    &quot;calculated&quot;: 0,
                    &quot;setting_id&quot;: 2,
                    &quot;concept_type_id&quot;: 1,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null,
                    &quot;pivot&quot;: {
                        &quot;payroll_id&quot;: 1,
                        &quot;concept_id&quot;: 2,
                        &quot;created_at&quot;: &quot;2022-02-28T19:05:29.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2022-02-28T19:05:29.000000Z&quot;,
                        &quot;count&quot;: 1,
                        &quot;unit_value&quot;: 30000,
                        &quot;total_value&quot;: 30000,
                        &quot;id&quot;: 8
                    }
                }
            ]
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-payroll" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-payroll"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-payroll"></code></pre>
</span>
<span id="execution-error-GETapi-payroll" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-payroll"></code></pre>
</span>
<form id="form-GETapi-payroll" data-method="GET"
      data-path="api/payroll"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-payroll', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-payroll"
                    onclick="tryItOut('GETapi-payroll');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-payroll"
                    onclick="cancelTryOut('GETapi-payroll');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-payroll" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/payroll</code></b>
        </p>
                    </form>

            <h2 id="payroll-POSTapi-payroll">POST api/payroll</h2>

<p>
</p>



<span id="example-requests-POSTapi-payroll">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/payroll',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'period_id' =&gt; 1,
            'user_id' =&gt; 2,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-payroll">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;period&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;16 a 30&quot;
        },
        &quot;user&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Michael&quot;,
            &quot;last_name&quot;: &quot;Moncada&quot;,
            &quot;identification_number&quot;: &quot;1088355971&quot;,
            &quot;active&quot;: 1,
            &quot;email&quot;: &quot;lider.desarrollo@sycgroup.co&quot;,
            &quot;base_salary&quot;: 1000000,
            &quot;position&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Gerente&quot;
            }
        },
        &quot;provision&quot;: {
            &quot;id&quot;: 1,
            &quot;period&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;16 a 30&quot;
            },
            &quot;pension_contribution&quot;: null,
            &quot;occupational_risk_contributions&quot;: null,
            &quot;health_contribution&quot;: null,
            &quot;compensation_funds&quot;: null,
            &quot;layoffs&quot;: null,
            &quot;Interest_on_severance_pay&quot;: null,
            &quot;vacation_provision&quot;: null,
            &quot;wage_premium&quot;: null,
            &quot;total_provisions&quot;: null,
            &quot;total_payroll&quot;: null
        },
        &quot;concepts&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:49:07.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:49:07.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 2
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:49:28.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:49:28.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:50:32.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:50:32.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:51:30.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:51:30.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 5
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:51:48.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:51:48.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 6
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T19:04:44.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T19:04:44.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 7
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T19:05:29.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T19:05:29.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 8
                }
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-payroll" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-payroll"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-payroll"></code></pre>
</span>
<span id="execution-error-POSTapi-payroll" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-payroll"></code></pre>
</span>
<form id="form-POSTapi-payroll" data-method="POST"
      data-path="api/payroll"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-payroll', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-payroll"
                    onclick="tryItOut('POSTapi-payroll');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-payroll"
                    onclick="cancelTryOut('POSTapi-payroll');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-payroll" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/payroll</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>period_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="period_id"
               data-endpoint="POSTapi-payroll"
               value="1"
               data-component="body" hidden>
    <br>
<p>ID de llave foranea del tipo de periodo, 5 a 19 o 20 a 4.</p>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="POSTapi-payroll"
               value="2"
               data-component="body" hidden>
    <br>
<p>ID de llave foranea del usuario.</p>
        </p>
        </form>

            <h2 id="payroll-GETapi-payroll--id-">GET api/payroll/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-payroll--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/payroll/7',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-payroll--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;period&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;16 a 30&quot;
        },
        &quot;user&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Michael&quot;,
            &quot;last_name&quot;: &quot;Moncada&quot;,
            &quot;identification_number&quot;: &quot;1088355971&quot;,
            &quot;active&quot;: 1,
            &quot;email&quot;: &quot;lider.desarrollo@sycgroup.co&quot;,
            &quot;base_salary&quot;: 1000000,
            &quot;position&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Gerente&quot;
            }
        },
        &quot;provision&quot;: {
            &quot;id&quot;: 1,
            &quot;period&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;16 a 30&quot;
            },
            &quot;pension_contribution&quot;: null,
            &quot;occupational_risk_contributions&quot;: null,
            &quot;health_contribution&quot;: null,
            &quot;compensation_funds&quot;: null,
            &quot;layoffs&quot;: null,
            &quot;Interest_on_severance_pay&quot;: null,
            &quot;vacation_provision&quot;: null,
            &quot;wage_premium&quot;: null,
            &quot;total_provisions&quot;: null,
            &quot;total_payroll&quot;: null
        },
        &quot;concepts&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:49:07.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:49:07.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 2
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:49:28.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:49:28.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:50:32.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:50:32.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:51:30.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:51:30.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 5
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:51:48.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:51:48.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 6
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T19:04:44.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T19:04:44.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 7
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T19:05:29.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T19:05:29.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 8
                }
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-payroll--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-payroll--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-payroll--id-"></code></pre>
</span>
<span id="execution-error-GETapi-payroll--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-payroll--id-"></code></pre>
</span>
<form id="form-GETapi-payroll--id-" data-method="GET"
      data-path="api/payroll/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-payroll--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-payroll--id-"
                    onclick="tryItOut('GETapi-payroll--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-payroll--id-"
                    onclick="cancelTryOut('GETapi-payroll--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-payroll--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/payroll/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-payroll--id-"
               value="7"
               data-component="url" hidden>
    <br>
<p>The ID of the payroll.</p>
            </p>
                    </form>

            <h2 id="payroll-PUTapi-payroll--id-">PUT api/payroll/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-payroll--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/payroll/16',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'period_id' =&gt; 1,
            'user_id' =&gt; 2,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-payroll--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;period&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;16 a 30&quot;
        },
        &quot;user&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Michael&quot;,
            &quot;last_name&quot;: &quot;Moncada&quot;,
            &quot;identification_number&quot;: &quot;1088355971&quot;,
            &quot;active&quot;: 1,
            &quot;email&quot;: &quot;lider.desarrollo@sycgroup.co&quot;,
            &quot;base_salary&quot;: 1000000,
            &quot;position&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Gerente&quot;
            }
        },
        &quot;provision&quot;: {
            &quot;id&quot;: 1,
            &quot;period&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;16 a 30&quot;
            },
            &quot;pension_contribution&quot;: null,
            &quot;occupational_risk_contributions&quot;: null,
            &quot;health_contribution&quot;: null,
            &quot;compensation_funds&quot;: null,
            &quot;layoffs&quot;: null,
            &quot;Interest_on_severance_pay&quot;: null,
            &quot;vacation_provision&quot;: null,
            &quot;wage_premium&quot;: null,
            &quot;total_provisions&quot;: null,
            &quot;total_payroll&quot;: null
        },
        &quot;concepts&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:49:07.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:49:07.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 2
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:49:28.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:49:28.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:50:32.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:50:32.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:51:30.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:51:30.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 5
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:51:48.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:51:48.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 6
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T19:04:44.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T19:04:44.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 7
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T19:05:29.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T19:05:29.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 8
                }
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-payroll--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-payroll--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-payroll--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-payroll--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-payroll--id-"></code></pre>
</span>
<form id="form-PUTapi-payroll--id-" data-method="PUT"
      data-path="api/payroll/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-payroll--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-payroll--id-"
                    onclick="tryItOut('PUTapi-payroll--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-payroll--id-"
                    onclick="cancelTryOut('PUTapi-payroll--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-payroll--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/payroll/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/payroll/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-payroll--id-"
               value="16"
               data-component="url" hidden>
    <br>
<p>The ID of the payroll.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>period_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="period_id"
               data-endpoint="PUTapi-payroll--id-"
               value="1"
               data-component="body" hidden>
    <br>
<p>ID de llave foranea del tipo de periodo, 5 a 19 o 20 a 4.</p>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="PUTapi-payroll--id-"
               value="2"
               data-component="body" hidden>
    <br>
<p>ID de llave foranea del usuario.</p>
        </p>
        </form>

            <h2 id="payroll-DELETEapi-payroll--id-">DELETE api/payroll/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-payroll--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/payroll/7',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-payroll--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;period&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;16 a 30&quot;
        },
        &quot;user&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Michael&quot;,
            &quot;last_name&quot;: &quot;Moncada&quot;,
            &quot;identification_number&quot;: &quot;1088355971&quot;,
            &quot;active&quot;: 1,
            &quot;email&quot;: &quot;lider.desarrollo@sycgroup.co&quot;,
            &quot;base_salary&quot;: 1000000,
            &quot;position&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Gerente&quot;
            }
        },
        &quot;provision&quot;: {
            &quot;id&quot;: 1,
            &quot;period&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;16 a 30&quot;
            },
            &quot;pension_contribution&quot;: null,
            &quot;occupational_risk_contributions&quot;: null,
            &quot;health_contribution&quot;: null,
            &quot;compensation_funds&quot;: null,
            &quot;layoffs&quot;: null,
            &quot;Interest_on_severance_pay&quot;: null,
            &quot;vacation_provision&quot;: null,
            &quot;wage_premium&quot;: null,
            &quot;total_provisions&quot;: null,
            &quot;total_payroll&quot;: null
        },
        &quot;concepts&quot;: [
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:49:07.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:49:07.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 2
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:49:28.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:49:28.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 3
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:50:32.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:50:32.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 4
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:51:30.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:51:30.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 5
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T18:51:48.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T18:51:48.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 6
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T19:04:44.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T19:04:44.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 7
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;setting_id&quot;: 2,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-02-28T19:05:29.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-28T19:05:29.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 30000,
                    &quot;id&quot;: 8
                }
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-payroll--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-payroll--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-payroll--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-payroll--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-payroll--id-"></code></pre>
</span>
<form id="form-DELETEapi-payroll--id-" data-method="DELETE"
      data-path="api/payroll/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-payroll--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-payroll--id-"
                    onclick="tryItOut('DELETEapi-payroll--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-payroll--id-"
                    onclick="cancelTryOut('DELETEapi-payroll--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-payroll--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/payroll/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-payroll--id-"
               value="7"
               data-component="url" hidden>
    <br>
<p>The ID of the payroll.</p>
            </p>
                    </form>

            <h2 id="payroll-GETapi-consultaPayroll">GET api/consultaPayroll</h2>

<p>
</p>



<span id="example-requests-GETapi-consultaPayroll">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/consultaPayroll',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'period_id'=&gt; '1',
            'user_id'=&gt; '2',
            'created_at'=&gt; '12',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-consultaPayroll">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-consultaPayroll" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-consultaPayroll"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-consultaPayroll"></code></pre>
</span>
<span id="execution-error-GETapi-consultaPayroll" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-consultaPayroll"></code></pre>
</span>
<form id="form-GETapi-consultaPayroll" data-method="GET"
      data-path="api/consultaPayroll"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-consultaPayroll', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-consultaPayroll"
                    onclick="tryItOut('GETapi-consultaPayroll');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-consultaPayroll"
                    onclick="cancelTryOut('GETapi-consultaPayroll');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-consultaPayroll" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/consultaPayroll</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>period_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="period_id"
               data-endpoint="GETapi-consultaPayroll"
               value="1"
               data-component="query" hidden>
    <br>
<p>El id del periodo de la nomina que se va a consultar.</p>
            </p>
                    <p>
                <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="GETapi-consultaPayroll"
               value="2"
               data-component="query" hidden>
    <br>
<p>El id del usuario de la nomina.</p>
            </p>
                    <p>
                <b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="created_at"
               data-endpoint="GETapi-consultaPayroll"
               value="12"
               data-component="query" hidden>
    <br>
<p>date La fecha con el MES de la nomina.</p>
            </p>
                </form>

            <h2 id="payroll-GETapi-consultDeduccion">GET api/consultDeduccion</h2>

<p>
</p>



<span id="example-requests-GETapi-consultDeduccion">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/consultDeduccion',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'period_id'=&gt; '1',
            'covenants_id'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-consultDeduccion">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-consultDeduccion" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-consultDeduccion"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-consultDeduccion"></code></pre>
</span>
<span id="execution-error-GETapi-consultDeduccion" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-consultDeduccion"></code></pre>
</span>
<form id="form-GETapi-consultDeduccion" data-method="GET"
      data-path="api/consultDeduccion"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-consultDeduccion', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-consultDeduccion"
                    onclick="tryItOut('GETapi-consultDeduccion');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-consultDeduccion"
                    onclick="cancelTryOut('GETapi-consultDeduccion');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-consultDeduccion" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/consultDeduccion</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>period_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="period_id"
               data-endpoint="GETapi-consultDeduccion"
               value="1"
               data-component="query" hidden>
    <br>
<p>ID de llave foranea para el periodo de la nomina que se va a consultar (5 a 19, 20 a 4).</p>
            </p>
                    <p>
                <b><code>covenants_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="covenants_id"
               data-endpoint="GETapi-consultDeduccion"
               value="1"
               data-component="query" hidden>
    <br>
<p>ID de llave foranea para el convenio que se va a consultar.</p>
            </p>
                </form>

            <h2 id="payroll-GETapi-payroll-user--user-">GET api/payroll/user/{user}</h2>

<p>
</p>



<span id="example-requests-GETapi-payroll-user--user-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/payroll/user/3',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-payroll-user--user-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-payroll-user--user-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-payroll-user--user-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-payroll-user--user-"></code></pre>
</span>
<span id="execution-error-GETapi-payroll-user--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-payroll-user--user-"></code></pre>
</span>
<form id="form-GETapi-payroll-user--user-" data-method="GET"
      data-path="api/payroll/user/{user}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-payroll-user--user-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-payroll-user--user-"
                    onclick="tryItOut('GETapi-payroll-user--user-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-payroll-user--user-"
                    onclick="cancelTryOut('GETapi-payroll-user--user-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-payroll-user--user-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/payroll/user/{user}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>user</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user"
               data-endpoint="GETapi-payroll-user--user-"
               value="3"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

            <h2 id="payroll-POSTapi-payrollConcept--payroll_id-">POST api/payrollConcept/{payroll_id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-payrollConcept--payroll_id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/payrollConcept/sed',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'concept_id' =&gt; 11,
            'count' =&gt; 7,
            'unit_value' =&gt; 13,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-payrollConcept--payroll_id-">
</span>
<span id="execution-results-POSTapi-payrollConcept--payroll_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-payrollConcept--payroll_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-payrollConcept--payroll_id-"></code></pre>
</span>
<span id="execution-error-POSTapi-payrollConcept--payroll_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-payrollConcept--payroll_id-"></code></pre>
</span>
<form id="form-POSTapi-payrollConcept--payroll_id-" data-method="POST"
      data-path="api/payrollConcept/{payroll_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-payrollConcept--payroll_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-payrollConcept--payroll_id-"
                    onclick="tryItOut('POSTapi-payrollConcept--payroll_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-payrollConcept--payroll_id-"
                    onclick="cancelTryOut('POSTapi-payrollConcept--payroll_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-payrollConcept--payroll_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/payrollConcept/{payroll_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>payroll_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="payroll_id"
               data-endpoint="POSTapi-payrollConcept--payroll_id-"
               value="sed"
               data-component="url" hidden>
    <br>
<p>The ID of the payroll.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>concept_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="concept_id"
               data-endpoint="POSTapi-payrollConcept--payroll_id-"
               value="11"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>count</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="count"
               data-endpoint="POSTapi-payrollConcept--payroll_id-"
               value="7"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>unit_value</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="unit_value"
               data-endpoint="POSTapi-payrollConcept--payroll_id-"
               value="13"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="payroll-DELETEapi-payrollDeleteConcept--payroll_id-">DELETE api/payrollDeleteConcept/{payroll_id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-payrollDeleteConcept--payroll_id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/payrollDeleteConcept/17',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'conceptPivotId'=&gt; '9',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-payrollDeleteConcept--payroll_id-">
</span>
<span id="execution-results-DELETEapi-payrollDeleteConcept--payroll_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-payrollDeleteConcept--payroll_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-payrollDeleteConcept--payroll_id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-payrollDeleteConcept--payroll_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-payrollDeleteConcept--payroll_id-"></code></pre>
</span>
<form id="form-DELETEapi-payrollDeleteConcept--payroll_id-" data-method="DELETE"
      data-path="api/payrollDeleteConcept/{payroll_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-payrollDeleteConcept--payroll_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-payrollDeleteConcept--payroll_id-"
                    onclick="tryItOut('DELETEapi-payrollDeleteConcept--payroll_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-payrollDeleteConcept--payroll_id-"
                    onclick="cancelTryOut('DELETEapi-payrollDeleteConcept--payroll_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-payrollDeleteConcept--payroll_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/payrollDeleteConcept/{payroll_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>payroll_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="payroll_id"
               data-endpoint="DELETEapi-payrollDeleteConcept--payroll_id-"
               value="17"
               data-component="url" hidden>
    <br>
<p>El id de la nomina a la que se le eliminará el concepto</p>
            </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>conceptPivotId</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="conceptPivotId"
               data-endpoint="DELETEapi-payrollDeleteConcept--payroll_id-"
               value="9"
               data-component="query" hidden>
    <br>
<p>El id del concepto que se eliminará ubicado en la pivot</p>
            </p>
                </form>

        <h1 id="pension-fund">Pension Fund</h1>

    

            <h2 id="pension-fund-GETapi-pensionFund">GET api/pensionFund</h2>

<p>
</p>



<span id="example-requests-GETapi-pensionFund">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/pensionFund',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-pensionFund">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Porvenir&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Porvenir&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-pensionFund" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pensionFund"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pensionFund"></code></pre>
</span>
<span id="execution-error-GETapi-pensionFund" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pensionFund"></code></pre>
</span>
<form id="form-GETapi-pensionFund" data-method="GET"
      data-path="api/pensionFund"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pensionFund', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pensionFund"
                    onclick="tryItOut('GETapi-pensionFund');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pensionFund"
                    onclick="cancelTryOut('GETapi-pensionFund');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pensionFund" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pensionFund</code></b>
        </p>
                    </form>

            <h2 id="pension-fund-POSTapi-pensionFund">POST api/pensionFund</h2>

<p>
</p>



<span id="example-requests-POSTapi-pensionFund">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/pensionFund',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-pensionFund">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Porvenir&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-pensionFund" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-pensionFund"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-pensionFund"></code></pre>
</span>
<span id="execution-error-POSTapi-pensionFund" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-pensionFund"></code></pre>
</span>
<form id="form-POSTapi-pensionFund" data-method="POST"
      data-path="api/pensionFund"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-pensionFund', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-pensionFund"
                    onclick="tryItOut('POSTapi-pensionFund');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-pensionFund"
                    onclick="cancelTryOut('POSTapi-pensionFund');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-pensionFund" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/pensionFund</code></b>
        </p>
                    </form>

            <h2 id="pension-fund-GETapi-pensionFund--id-">GET api/pensionFund/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-pensionFund--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/pensionFund/3',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-pensionFund--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Porvenir&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-pensionFund--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-pensionFund--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pensionFund--id-"></code></pre>
</span>
<span id="execution-error-GETapi-pensionFund--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pensionFund--id-"></code></pre>
</span>
<form id="form-GETapi-pensionFund--id-" data-method="GET"
      data-path="api/pensionFund/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-pensionFund--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-pensionFund--id-"
                    onclick="tryItOut('GETapi-pensionFund--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-pensionFund--id-"
                    onclick="cancelTryOut('GETapi-pensionFund--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-pensionFund--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/pensionFund/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-pensionFund--id-"
               value="3"
               data-component="url" hidden>
    <br>
<p>The ID of the pensionFund.</p>
            </p>
                    </form>

            <h2 id="pension-fund-PUTapi-pensionFund--id-">PUT api/pensionFund/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-pensionFund--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/pensionFund/17',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-pensionFund--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Porvenir&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-pensionFund--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-pensionFund--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-pensionFund--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-pensionFund--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-pensionFund--id-"></code></pre>
</span>
<form id="form-PUTapi-pensionFund--id-" data-method="PUT"
      data-path="api/pensionFund/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-pensionFund--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-pensionFund--id-"
                    onclick="tryItOut('PUTapi-pensionFund--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-pensionFund--id-"
                    onclick="cancelTryOut('PUTapi-pensionFund--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-pensionFund--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/pensionFund/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/pensionFund/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-pensionFund--id-"
               value="17"
               data-component="url" hidden>
    <br>
<p>The ID of the pensionFund.</p>
            </p>
                    </form>

            <h2 id="pension-fund-DELETEapi-pensionFund--id-">DELETE api/pensionFund/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-pensionFund--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/pensionFund/14',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-pensionFund--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Porvenir&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-pensionFund--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-pensionFund--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-pensionFund--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-pensionFund--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-pensionFund--id-"></code></pre>
</span>
<form id="form-DELETEapi-pensionFund--id-" data-method="DELETE"
      data-path="api/pensionFund/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-pensionFund--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-pensionFund--id-"
                    onclick="tryItOut('DELETEapi-pensionFund--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-pensionFund--id-"
                    onclick="cancelTryOut('DELETEapi-pensionFund--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-pensionFund--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/pensionFund/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-pensionFund--id-"
               value="14"
               data-component="url" hidden>
    <br>
<p>The ID of the pensionFund.</p>
            </p>
                    </form>

        <h1 id="period">Period</h1>

    

            <h2 id="period-GETapi-period">GET api/period</h2>

<p>
</p>



<span id="example-requests-GETapi-period">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/period',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-period">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;1 a 15&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;1 a 15&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-period" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-period"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-period"></code></pre>
</span>
<span id="execution-error-GETapi-period" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-period"></code></pre>
</span>
<form id="form-GETapi-period" data-method="GET"
      data-path="api/period"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-period', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-period"
                    onclick="tryItOut('GETapi-period');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-period"
                    onclick="cancelTryOut('GETapi-period');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-period" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/period</code></b>
        </p>
                    </form>

            <h2 id="period-POSTapi-period">POST api/period</h2>

<p>
</p>



<span id="example-requests-POSTapi-period">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/period',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; '5 a 19',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-period">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;1 a 15&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-period" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-period"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-period"></code></pre>
</span>
<span id="execution-error-POSTapi-period" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-period"></code></pre>
</span>
<form id="form-POSTapi-period" data-method="POST"
      data-path="api/period"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-period', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-period"
                    onclick="tryItOut('POSTapi-period');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-period"
                    onclick="cancelTryOut('POSTapi-period');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-period" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/period</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-period"
               value="5 a 19"
               data-component="body" hidden>
    <br>
<p>El nombre de periodo que se usaria para la nomina, ya viene definido por defecto.</p>
        </p>
        </form>

            <h2 id="period-GETapi-period--id-">GET api/period/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-period--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/period/14',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-period--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;1 a 15&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-period--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-period--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-period--id-"></code></pre>
</span>
<span id="execution-error-GETapi-period--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-period--id-"></code></pre>
</span>
<form id="form-GETapi-period--id-" data-method="GET"
      data-path="api/period/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-period--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-period--id-"
                    onclick="tryItOut('GETapi-period--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-period--id-"
                    onclick="cancelTryOut('GETapi-period--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-period--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/period/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-period--id-"
               value="14"
               data-component="url" hidden>
    <br>
<p>The ID of the period.</p>
            </p>
                    </form>

            <h2 id="period-PUTapi-period--id-">PUT api/period/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-period--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/period/20',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; '5 a 19',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-period--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;1 a 15&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-period--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-period--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-period--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-period--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-period--id-"></code></pre>
</span>
<form id="form-PUTapi-period--id-" data-method="PUT"
      data-path="api/period/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-period--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-period--id-"
                    onclick="tryItOut('PUTapi-period--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-period--id-"
                    onclick="cancelTryOut('PUTapi-period--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-period--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/period/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/period/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-period--id-"
               value="20"
               data-component="url" hidden>
    <br>
<p>The ID of the period.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-period--id-"
               value="5 a 19"
               data-component="body" hidden>
    <br>
<p>El nombre de periodo que se usaria para la nomina, ya viene definido por defecto.</p>
        </p>
        </form>

            <h2 id="period-DELETEapi-period--id-">DELETE api/period/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-period--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/period/9',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-period--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;1 a 15&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-period--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-period--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-period--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-period--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-period--id-"></code></pre>
</span>
<form id="form-DELETEapi-period--id-" data-method="DELETE"
      data-path="api/period/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-period--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-period--id-"
                    onclick="tryItOut('DELETEapi-period--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-period--id-"
                    onclick="cancelTryOut('DELETEapi-period--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-period--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/period/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-period--id-"
               value="9"
               data-component="url" hidden>
    <br>
<p>The ID of the period.</p>
            </p>
                    </form>

        <h1 id="periodicity-type">Periodicity Type</h1>

    

            <h2 id="periodicity-type-GETapi-periodicityType">GET api/periodicityType</h2>

<p>
</p>



<span id="example-requests-GETapi-periodicityType">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/periodicityType',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-periodicityType">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Quincenal&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Quincenal&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-periodicityType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-periodicityType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-periodicityType"></code></pre>
</span>
<span id="execution-error-GETapi-periodicityType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-periodicityType"></code></pre>
</span>
<form id="form-GETapi-periodicityType" data-method="GET"
      data-path="api/periodicityType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-periodicityType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-periodicityType"
                    onclick="tryItOut('GETapi-periodicityType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-periodicityType"
                    onclick="cancelTryOut('GETapi-periodicityType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-periodicityType" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/periodicityType</code></b>
        </p>
                    </form>

            <h2 id="periodicity-type-POSTapi-periodicityType">POST api/periodicityType</h2>

<p>
</p>



<span id="example-requests-POSTapi-periodicityType">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/periodicityType',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'optio',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-periodicityType">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Quincenal&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-periodicityType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-periodicityType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-periodicityType"></code></pre>
</span>
<span id="execution-error-POSTapi-periodicityType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-periodicityType"></code></pre>
</span>
<form id="form-POSTapi-periodicityType" data-method="POST"
      data-path="api/periodicityType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-periodicityType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-periodicityType"
                    onclick="tryItOut('POSTapi-periodicityType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-periodicityType"
                    onclick="cancelTryOut('POSTapi-periodicityType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-periodicityType" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/periodicityType</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-periodicityType"
               value="optio"
               data-component="body" hidden>
    <br>
<p>El nombre, si es quincenal o mensual, ya viene definido por defecto</p>
        </p>
        </form>

            <h2 id="periodicity-type-GETapi-periodicityType--id-">GET api/periodicityType/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-periodicityType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/periodicityType/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-periodicityType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Quincenal&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-periodicityType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-periodicityType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-periodicityType--id-"></code></pre>
</span>
<span id="execution-error-GETapi-periodicityType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-periodicityType--id-"></code></pre>
</span>
<form id="form-GETapi-periodicityType--id-" data-method="GET"
      data-path="api/periodicityType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-periodicityType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-periodicityType--id-"
                    onclick="tryItOut('GETapi-periodicityType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-periodicityType--id-"
                    onclick="cancelTryOut('GETapi-periodicityType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-periodicityType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/periodicityType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-periodicityType--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the periodicityType.</p>
            </p>
                    </form>

            <h2 id="periodicity-type-PUTapi-periodicityType--id-">PUT api/periodicityType/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-periodicityType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/periodicityType/9',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'fuga',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-periodicityType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Quincenal&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-periodicityType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-periodicityType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-periodicityType--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-periodicityType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-periodicityType--id-"></code></pre>
</span>
<form id="form-PUTapi-periodicityType--id-" data-method="PUT"
      data-path="api/periodicityType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-periodicityType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-periodicityType--id-"
                    onclick="tryItOut('PUTapi-periodicityType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-periodicityType--id-"
                    onclick="cancelTryOut('PUTapi-periodicityType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-periodicityType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/periodicityType/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/periodicityType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-periodicityType--id-"
               value="9"
               data-component="url" hidden>
    <br>
<p>The ID of the periodicityType.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-periodicityType--id-"
               value="fuga"
               data-component="body" hidden>
    <br>
<p>El nombre, si es quincenal o mensual, ya viene definido por defecto</p>
        </p>
        </form>

            <h2 id="periodicity-type-DELETEapi-periodicityType--id-">DELETE api/periodicityType/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-periodicityType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/periodicityType/15',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-periodicityType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Quincenal&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-periodicityType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-periodicityType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-periodicityType--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-periodicityType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-periodicityType--id-"></code></pre>
</span>
<form id="form-DELETEapi-periodicityType--id-" data-method="DELETE"
      data-path="api/periodicityType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-periodicityType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-periodicityType--id-"
                    onclick="tryItOut('DELETEapi-periodicityType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-periodicityType--id-"
                    onclick="cancelTryOut('DELETEapi-periodicityType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-periodicityType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/periodicityType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-periodicityType--id-"
               value="15"
               data-component="url" hidden>
    <br>
<p>The ID of the periodicityType.</p>
            </p>
                    </form>

        <h1 id="position">Position</h1>

    

            <h2 id="position-GETapi-position">GET api/position</h2>

<p>
</p>



<span id="example-requests-GETapi-position">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/position',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-position">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Gerente&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Gerente&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-position" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-position"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-position"></code></pre>
</span>
<span id="execution-error-GETapi-position" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-position"></code></pre>
</span>
<form id="form-GETapi-position" data-method="GET"
      data-path="api/position"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-position', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-position"
                    onclick="tryItOut('GETapi-position');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-position"
                    onclick="cancelTryOut('GETapi-position');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-position" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/position</code></b>
        </p>
                    </form>

            <h2 id="position-POSTapi-position">POST api/position</h2>

<p>
</p>



<span id="example-requests-POSTapi-position">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/position',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Jefe',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-position">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Gerente&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-position" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-position"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-position"></code></pre>
</span>
<span id="execution-error-POSTapi-position" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-position"></code></pre>
</span>
<form id="form-POSTapi-position" data-method="POST"
      data-path="api/position"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-position', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-position"
                    onclick="tryItOut('POSTapi-position');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-position"
                    onclick="cancelTryOut('POSTapi-position');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-position" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/position</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-position"
               value="Jefe"
               data-component="body" hidden>
    <br>
<p>El nombre del cargo.</p>
        </p>
        </form>

            <h2 id="position-GETapi-position--id-">GET api/position/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-position--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/position/3',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-position--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Gerente&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-position--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-position--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-position--id-"></code></pre>
</span>
<span id="execution-error-GETapi-position--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-position--id-"></code></pre>
</span>
<form id="form-GETapi-position--id-" data-method="GET"
      data-path="api/position/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-position--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-position--id-"
                    onclick="tryItOut('GETapi-position--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-position--id-"
                    onclick="cancelTryOut('GETapi-position--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-position--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/position/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-position--id-"
               value="3"
               data-component="url" hidden>
    <br>
<p>The ID of the position.</p>
            </p>
                    </form>

            <h2 id="position-PUTapi-position--id-">PUT api/position/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-position--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/position/16',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Jefe',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-position--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Gerente&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-position--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-position--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-position--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-position--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-position--id-"></code></pre>
</span>
<form id="form-PUTapi-position--id-" data-method="PUT"
      data-path="api/position/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-position--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-position--id-"
                    onclick="tryItOut('PUTapi-position--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-position--id-"
                    onclick="cancelTryOut('PUTapi-position--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-position--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/position/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/position/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-position--id-"
               value="16"
               data-component="url" hidden>
    <br>
<p>The ID of the position.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-position--id-"
               value="Jefe"
               data-component="body" hidden>
    <br>
<p>El nombre del cargo.</p>
        </p>
        </form>

            <h2 id="position-DELETEapi-position--id-">DELETE api/position/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-position--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/position/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-position--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Gerente&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-position--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-position--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-position--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-position--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-position--id-"></code></pre>
</span>
<form id="form-DELETEapi-position--id-" data-method="DELETE"
      data-path="api/position/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-position--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-position--id-"
                    onclick="tryItOut('DELETEapi-position--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-position--id-"
                    onclick="cancelTryOut('DELETEapi-position--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-position--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/position/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-position--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the position.</p>
            </p>
                    </form>

        <h1 id="provider">Provider</h1>

    

            <h2 id="provider-GETapi-provider">GET api/provider</h2>

<p>
</p>



<span id="example-requests-GETapi-provider">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/provider',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-provider">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Jhonatan&quot;,
            &quot;last_name&quot;: &quot;Gamboa&quot;,
            &quot;trade_name&quot;: &quot;Jhonata SAS&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Jhonatan&quot;,
            &quot;last_name&quot;: &quot;Gamboa&quot;,
            &quot;trade_name&quot;: &quot;Jhonata SAS&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-provider" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-provider"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-provider"></code></pre>
</span>
<span id="execution-error-GETapi-provider" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-provider"></code></pre>
</span>
<form id="form-GETapi-provider" data-method="GET"
      data-path="api/provider"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-provider', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-provider"
                    onclick="tryItOut('GETapi-provider');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-provider"
                    onclick="cancelTryOut('GETapi-provider');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-provider" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/provider</code></b>
        </p>
                    </form>

            <h2 id="provider-POSTapi-provider">POST api/provider</h2>

<p>
</p>



<span id="example-requests-POSTapi-provider">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/provider',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'b',
            'trade_name' =&gt; 'ei',
            'address' =&gt; 'm',
            'phone' =&gt; '',
            'identification_number' =&gt; '',
            'identification_type_id' =&gt; 13,
            'iva' =&gt; true,
            'email' =&gt; 'alene94@example.org',
            'password' =&gt; 'quia',
            'constitution_type_id' =&gt; 1,
            'city_id' =&gt; 13,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-provider">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Jhonatan&quot;,
        &quot;last_name&quot;: &quot;Gamboa&quot;,
        &quot;trade_name&quot;: &quot;Jhonata SAS&quot;,
        &quot;address&quot;: &quot;calle 13&quot;,
        &quot;phone&quot;: &quot;3113012618&quot;,
        &quot;identification_number&quot;: &quot;1232599679&quot;,
        &quot;iva&quot;: 1,
        &quot;email&quot;: &quot;jhonatan@gmail.com&quot;,
        &quot;identificationType&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;NIT&quot;
        },
        &quot;ConstitutionType&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Juridica&quot;
        },
        &quot;city&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Medell&iacute;n&quot;,
            &quot;province&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Antioquia&quot;,
                &quot;prefix&quot;: 606,
                &quot;active&quot;: 1
            },
            &quot;active&quot;: 1
        },
        &quot;responsabilityType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Responsable de IVA&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-provider" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-provider"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-provider"></code></pre>
</span>
<span id="execution-error-POSTapi-provider" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-provider"></code></pre>
</span>
<form id="form-POSTapi-provider" data-method="POST"
      data-path="api/provider"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-provider', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-provider"
                    onclick="tryItOut('POSTapi-provider');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-provider"
                    onclick="cancelTryOut('POSTapi-provider');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-provider" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/provider</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-provider"
               value="b"
               data-component="body" hidden>
    <br>
<p>Must be at least 3 characters.</p>
        </p>
                <p>
            <b><code>0</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="0"
               data-endpoint="POSTapi-provider"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>trade_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="trade_name"
               data-endpoint="POSTapi-provider"
               value="ei"
               data-component="body" hidden>
    <br>
<p>Must be at least 3 characters.</p>
        </p>
                <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="address"
               data-endpoint="POSTapi-provider"
               value="m"
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="phone"
               data-endpoint="POSTapi-provider"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>identification_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="identification_number"
               data-endpoint="POSTapi-provider"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>identification_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="identification_type_id"
               data-endpoint="POSTapi-provider"
               value="13"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>iva</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
                <label data-endpoint="POSTapi-provider" hidden>
            <input type="radio" name="iva"
                   value="true"
                   data-endpoint="POSTapi-provider"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-provider" hidden>
            <input type="radio" name="iva"
                   value="false"
                   data-endpoint="POSTapi-provider"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-provider"
               value="alene94@example.org"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-provider"
               value="quia"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>constitution_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="constitution_type_id"
               data-endpoint="POSTapi-provider"
               value="1"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>city_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="city_id"
               data-endpoint="POSTapi-provider"
               value="13"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>1</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="1"
               data-endpoint="POSTapi-provider"
               value=""
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="provider-GETapi-provider--id-">GET api/provider/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-provider--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/provider/13',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-provider--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Jhonatan&quot;,
        &quot;last_name&quot;: &quot;Gamboa&quot;,
        &quot;trade_name&quot;: &quot;Jhonata SAS&quot;,
        &quot;address&quot;: &quot;calle 13&quot;,
        &quot;phone&quot;: &quot;3113012618&quot;,
        &quot;identification_number&quot;: &quot;1232599679&quot;,
        &quot;iva&quot;: 1,
        &quot;email&quot;: &quot;jhonatan@gmail.com&quot;,
        &quot;identificationType&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;NIT&quot;
        },
        &quot;ConstitutionType&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Juridica&quot;
        },
        &quot;city&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Medell&iacute;n&quot;,
            &quot;province&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Antioquia&quot;,
                &quot;prefix&quot;: 606,
                &quot;active&quot;: 1
            },
            &quot;active&quot;: 1
        },
        &quot;responsabilityType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Responsable de IVA&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-provider--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-provider--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-provider--id-"></code></pre>
</span>
<span id="execution-error-GETapi-provider--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-provider--id-"></code></pre>
</span>
<form id="form-GETapi-provider--id-" data-method="GET"
      data-path="api/provider/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-provider--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-provider--id-"
                    onclick="tryItOut('GETapi-provider--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-provider--id-"
                    onclick="cancelTryOut('GETapi-provider--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-provider--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/provider/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-provider--id-"
               value="13"
               data-component="url" hidden>
    <br>
<p>The ID of the provider.</p>
            </p>
                    </form>

            <h2 id="provider-PUTapi-provider--id-">PUT api/provider/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-provider--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/provider/8',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'accusantium',
            'trade_name' =&gt; 'officia',
            'address' =&gt; 'lwymn',
            'phone' =&gt; 'ftjwg',
            'identification_number' =&gt; 'cum',
            'identification_type_id' =&gt; 13,
            'iva' =&gt; false,
            'email' =&gt; 'llittel@example.com',
            'password' =&gt; 'sint',
            'constitution_type_id' =&gt; 2,
            'city_id' =&gt; 16,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-provider--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Jhonatan&quot;,
        &quot;last_name&quot;: &quot;Gamboa&quot;,
        &quot;trade_name&quot;: &quot;Jhonata SAS&quot;,
        &quot;address&quot;: &quot;calle 13&quot;,
        &quot;phone&quot;: &quot;3113012618&quot;,
        &quot;identification_number&quot;: &quot;1232599679&quot;,
        &quot;iva&quot;: 1,
        &quot;email&quot;: &quot;jhonatan@gmail.com&quot;,
        &quot;identificationType&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;NIT&quot;
        },
        &quot;ConstitutionType&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Juridica&quot;
        },
        &quot;city&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Medell&iacute;n&quot;,
            &quot;province&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Antioquia&quot;,
                &quot;prefix&quot;: 606,
                &quot;active&quot;: 1
            },
            &quot;active&quot;: 1
        },
        &quot;responsabilityType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Responsable de IVA&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-provider--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-provider--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-provider--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-provider--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-provider--id-"></code></pre>
</span>
<form id="form-PUTapi-provider--id-" data-method="PUT"
      data-path="api/provider/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-provider--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-provider--id-"
                    onclick="tryItOut('PUTapi-provider--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-provider--id-"
                    onclick="cancelTryOut('PUTapi-provider--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-provider--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/provider/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/provider/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-provider--id-"
               value="8"
               data-component="url" hidden>
    <br>
<p>The ID of the provider.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-provider--id-"
               value="accusantium"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>0</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="0"
               data-endpoint="PUTapi-provider--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>trade_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="trade_name"
               data-endpoint="PUTapi-provider--id-"
               value="officia"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="address"
               data-endpoint="PUTapi-provider--id-"
               value="lwymn"
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="phone"
               data-endpoint="PUTapi-provider--id-"
               value="ftjwg"
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>identification_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="identification_number"
               data-endpoint="PUTapi-provider--id-"
               value="cum"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>identification_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="identification_type_id"
               data-endpoint="PUTapi-provider--id-"
               value="13"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>iva</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-provider--id-" hidden>
            <input type="radio" name="iva"
                   value="true"
                   data-endpoint="PUTapi-provider--id-"
                   data-component="body"
            >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-provider--id-" hidden>
            <input type="radio" name="iva"
                   value="false"
                   data-endpoint="PUTapi-provider--id-"
                   data-component="body"
            >
            <code>false</code>
        </label>
    <br>

        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="email"
               data-endpoint="PUTapi-provider--id-"
               value="llittel@example.com"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="password"
               data-endpoint="PUTapi-provider--id-"
               value="sint"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>constitution_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="constitution_type_id"
               data-endpoint="PUTapi-provider--id-"
               value="2"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>city_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="city_id"
               data-endpoint="PUTapi-provider--id-"
               value="16"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>1</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="1"
               data-endpoint="PUTapi-provider--id-"
               value=""
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="provider-DELETEapi-provider--id-">DELETE api/provider/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-provider--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/provider/12',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-provider--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Jhonatan&quot;,
        &quot;last_name&quot;: &quot;Gamboa&quot;,
        &quot;trade_name&quot;: &quot;Jhonata SAS&quot;,
        &quot;address&quot;: &quot;calle 13&quot;,
        &quot;phone&quot;: &quot;3113012618&quot;,
        &quot;identification_number&quot;: &quot;1232599679&quot;,
        &quot;iva&quot;: 1,
        &quot;email&quot;: &quot;jhonatan@gmail.com&quot;,
        &quot;identificationType&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;NIT&quot;
        },
        &quot;ConstitutionType&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Juridica&quot;
        },
        &quot;city&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Medell&iacute;n&quot;,
            &quot;province&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Antioquia&quot;,
                &quot;prefix&quot;: 606,
                &quot;active&quot;: 1
            },
            &quot;active&quot;: 1
        },
        &quot;responsabilityType&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Responsable de IVA&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-provider--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-provider--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-provider--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-provider--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-provider--id-"></code></pre>
</span>
<form id="form-DELETEapi-provider--id-" data-method="DELETE"
      data-path="api/provider/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-provider--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-provider--id-"
                    onclick="tryItOut('DELETEapi-provider--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-provider--id-"
                    onclick="cancelTryOut('DELETEapi-provider--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-provider--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/provider/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-provider--id-"
               value="12"
               data-component="url" hidden>
    <br>
<p>The ID of the provider.</p>
            </p>
                    </form>

        <h1 id="province">Province</h1>

    

            <h2 id="province-GETapi-province">GET api/province</h2>

<p>
</p>



<span id="example-requests-GETapi-province">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/province',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'name'=&gt; 'Risaralda',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-province">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Antioquia&quot;,
            &quot;prefix&quot;: 606,
            &quot;active&quot;: 1
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Antioquia&quot;,
            &quot;prefix&quot;: 606,
            &quot;active&quot;: 1
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-province" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-province"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-province"></code></pre>
</span>
<span id="execution-error-GETapi-province" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-province"></code></pre>
</span>
<form id="form-GETapi-province" data-method="GET"
      data-path="api/province"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-province', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-province"
                    onclick="tryItOut('GETapi-province');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-province"
                    onclick="cancelTryOut('GETapi-province');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-province" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/province</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="GETapi-province"
               value="Risaralda"
               data-component="query" hidden>
    <br>
<p>Filtro para buscar departamentos.</p>
            </p>
                </form>

        <h1 id="provision">Provision</h1>

    

            <h2 id="provision-GETapi-provision">GET api/provision</h2>

<p>
</p>



<span id="example-requests-GETapi-provision">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/provision',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-provision">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;period&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;16 a 30&quot;
            },
            &quot;pension_contribution&quot;: null,
            &quot;occupational_risk_contributions&quot;: null,
            &quot;health_contribution&quot;: null,
            &quot;compensation_funds&quot;: null,
            &quot;layoffs&quot;: null,
            &quot;Interest_on_severance_pay&quot;: null,
            &quot;vacation_provision&quot;: null,
            &quot;wage_premium&quot;: null,
            &quot;total_provisions&quot;: null,
            &quot;total_payroll&quot;: null
        },
        {
            &quot;id&quot;: 1,
            &quot;period&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;16 a 30&quot;
            },
            &quot;pension_contribution&quot;: null,
            &quot;occupational_risk_contributions&quot;: null,
            &quot;health_contribution&quot;: null,
            &quot;compensation_funds&quot;: null,
            &quot;layoffs&quot;: null,
            &quot;Interest_on_severance_pay&quot;: null,
            &quot;vacation_provision&quot;: null,
            &quot;wage_premium&quot;: null,
            &quot;total_provisions&quot;: null,
            &quot;total_payroll&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-provision" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-provision"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-provision"></code></pre>
</span>
<span id="execution-error-GETapi-provision" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-provision"></code></pre>
</span>
<form id="form-GETapi-provision" data-method="GET"
      data-path="api/provision"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-provision', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-provision"
                    onclick="tryItOut('GETapi-provision');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-provision"
                    onclick="cancelTryOut('GETapi-provision');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-provision" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/provision</code></b>
        </p>
                    </form>

            <h2 id="provision-GETapi-provision--id-">GET api/provision/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-provision--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/provision/17',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-provision--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;period&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;16 a 30&quot;
        },
        &quot;pension_contribution&quot;: null,
        &quot;occupational_risk_contributions&quot;: null,
        &quot;health_contribution&quot;: null,
        &quot;compensation_funds&quot;: null,
        &quot;layoffs&quot;: null,
        &quot;Interest_on_severance_pay&quot;: null,
        &quot;vacation_provision&quot;: null,
        &quot;wage_premium&quot;: null,
        &quot;total_provisions&quot;: null,
        &quot;total_payroll&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-provision--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-provision--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-provision--id-"></code></pre>
</span>
<span id="execution-error-GETapi-provision--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-provision--id-"></code></pre>
</span>
<form id="form-GETapi-provision--id-" data-method="GET"
      data-path="api/provision/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-provision--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-provision--id-"
                    onclick="tryItOut('GETapi-provision--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-provision--id-"
                    onclick="cancelTryOut('GETapi-provision--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-provision--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/provision/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-provision--id-"
               value="17"
               data-component="url" hidden>
    <br>
<p>The ID of the provision.</p>
            </p>
                    </form>

            <h2 id="provision-DELETEapi-provision--id-">DELETE api/provision/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-provision--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/provision/5',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-provision--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;period&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;16 a 30&quot;
        },
        &quot;pension_contribution&quot;: null,
        &quot;occupational_risk_contributions&quot;: null,
        &quot;health_contribution&quot;: null,
        &quot;compensation_funds&quot;: null,
        &quot;layoffs&quot;: null,
        &quot;Interest_on_severance_pay&quot;: null,
        &quot;vacation_provision&quot;: null,
        &quot;wage_premium&quot;: null,
        &quot;total_provisions&quot;: null,
        &quot;total_payroll&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-provision--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-provision--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-provision--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-provision--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-provision--id-"></code></pre>
</span>
<form id="form-DELETEapi-provision--id-" data-method="DELETE"
      data-path="api/provision/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-provision--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-provision--id-"
                    onclick="tryItOut('DELETEapi-provision--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-provision--id-"
                    onclick="cancelTryOut('DELETEapi-provision--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-provision--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/provision/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-provision--id-"
               value="5"
               data-component="url" hidden>
    <br>
<p>The ID of the provision.</p>
            </p>
                    </form>

            <h2 id="provision-POSTapi-provision">POST api/provision</h2>

<p>
</p>



<span id="example-requests-POSTapi-provision">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/provision',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'period_id' =&gt; 9,
            'pension_contribution' =&gt; 15,
            'occupational_risk_contributions' =&gt; 19,
            'health_contribution' =&gt; 19,
            'compensation_funds' =&gt; 9,
            'layoffs' =&gt; 1,
            'Interest_on_severance_pay' =&gt; 12,
            'vacation_provision' =&gt; 2,
            'wage_premium' =&gt; 15,
            'total_provisiones' =&gt; 4,
            'total_payroll' =&gt; 5,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-provision">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;period&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;16 a 30&quot;
        },
        &quot;pension_contribution&quot;: null,
        &quot;occupational_risk_contributions&quot;: null,
        &quot;health_contribution&quot;: null,
        &quot;compensation_funds&quot;: null,
        &quot;layoffs&quot;: null,
        &quot;Interest_on_severance_pay&quot;: null,
        &quot;vacation_provision&quot;: null,
        &quot;wage_premium&quot;: null,
        &quot;total_provisions&quot;: null,
        &quot;total_payroll&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-provision" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-provision"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-provision"></code></pre>
</span>
<span id="execution-error-POSTapi-provision" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-provision"></code></pre>
</span>
<form id="form-POSTapi-provision" data-method="POST"
      data-path="api/provision"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-provision', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-provision"
                    onclick="tryItOut('POSTapi-provision');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-provision"
                    onclick="cancelTryOut('POSTapi-provision');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-provision" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/provision</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>period_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="period_id"
               data-endpoint="POSTapi-provision"
               value="9"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>pension_contribution</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="pension_contribution"
               data-endpoint="POSTapi-provision"
               value="15"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>occupational_risk_contributions</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="occupational_risk_contributions"
               data-endpoint="POSTapi-provision"
               value="19"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>health_contribution</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="health_contribution"
               data-endpoint="POSTapi-provision"
               value="19"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>compensation_funds</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="compensation_funds"
               data-endpoint="POSTapi-provision"
               value="9"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>layoffs</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="layoffs"
               data-endpoint="POSTapi-provision"
               value="1"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>Interest_on_severance_pay</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="Interest_on_severance_pay"
               data-endpoint="POSTapi-provision"
               value="12"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>vacation_provision</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="vacation_provision"
               data-endpoint="POSTapi-provision"
               value="2"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>wage_premium</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="wage_premium"
               data-endpoint="POSTapi-provision"
               value="15"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>total_provisiones</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="total_provisiones"
               data-endpoint="POSTapi-provision"
               value="4"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>total_payroll</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="total_payroll"
               data-endpoint="POSTapi-provision"
               value="5"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="provision-PUTapi-provision--id-">PUT api/provision/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-provision--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/provision/7',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'period_id' =&gt; 19,
            'pension_contribution' =&gt; 3,
            'occupational_risk_contributions' =&gt; 18,
            'health_contribution' =&gt; 15,
            'compensation_funds' =&gt; 2,
            'layoffs' =&gt; 20,
            'Interest_on_severance_pay' =&gt; 17,
            'vacation_provision' =&gt; 17,
            'wage_premium' =&gt; 19,
            'total_provisiones' =&gt; 1,
            'total_payroll' =&gt; 17,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-provision--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;period&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;16 a 30&quot;
        },
        &quot;pension_contribution&quot;: null,
        &quot;occupational_risk_contributions&quot;: null,
        &quot;health_contribution&quot;: null,
        &quot;compensation_funds&quot;: null,
        &quot;layoffs&quot;: null,
        &quot;Interest_on_severance_pay&quot;: null,
        &quot;vacation_provision&quot;: null,
        &quot;wage_premium&quot;: null,
        &quot;total_provisions&quot;: null,
        &quot;total_payroll&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-provision--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-provision--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-provision--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-provision--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-provision--id-"></code></pre>
</span>
<form id="form-PUTapi-provision--id-" data-method="PUT"
      data-path="api/provision/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-provision--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-provision--id-"
                    onclick="tryItOut('PUTapi-provision--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-provision--id-"
                    onclick="cancelTryOut('PUTapi-provision--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-provision--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/provision/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/provision/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-provision--id-"
               value="7"
               data-component="url" hidden>
    <br>
<p>The ID of the provision.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>period_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="period_id"
               data-endpoint="PUTapi-provision--id-"
               value="19"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>pension_contribution</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="pension_contribution"
               data-endpoint="PUTapi-provision--id-"
               value="3"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>occupational_risk_contributions</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="occupational_risk_contributions"
               data-endpoint="PUTapi-provision--id-"
               value="18"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>health_contribution</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="health_contribution"
               data-endpoint="PUTapi-provision--id-"
               value="15"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>compensation_funds</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="compensation_funds"
               data-endpoint="PUTapi-provision--id-"
               value="2"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>layoffs</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="layoffs"
               data-endpoint="PUTapi-provision--id-"
               value="20"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>Interest_on_severance_pay</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="Interest_on_severance_pay"
               data-endpoint="PUTapi-provision--id-"
               value="17"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>vacation_provision</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="vacation_provision"
               data-endpoint="PUTapi-provision--id-"
               value="17"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>wage_premium</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="wage_premium"
               data-endpoint="PUTapi-provision--id-"
               value="19"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>total_provisiones</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="total_provisiones"
               data-endpoint="PUTapi-provision--id-"
               value="1"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>total_payroll</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="total_payroll"
               data-endpoint="PUTapi-provision--id-"
               value="17"
               data-component="body" hidden>
    <br>

        </p>
        </form>

        <h1 id="salary-type">Salary Type</h1>

    

            <h2 id="salary-type-GETapi-salaryType">GET api/salaryType</h2>

<p>
</p>



<span id="example-requests-GETapi-salaryType">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/salaryType',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-salaryType">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Fijo&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Fijo&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-salaryType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-salaryType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-salaryType"></code></pre>
</span>
<span id="execution-error-GETapi-salaryType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-salaryType"></code></pre>
</span>
<form id="form-GETapi-salaryType" data-method="GET"
      data-path="api/salaryType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-salaryType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-salaryType"
                    onclick="tryItOut('GETapi-salaryType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-salaryType"
                    onclick="cancelTryOut('GETapi-salaryType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-salaryType" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/salaryType</code></b>
        </p>
                    </form>

            <h2 id="salary-type-POSTapi-salaryType">POST api/salaryType</h2>

<p>
</p>



<span id="example-requests-POSTapi-salaryType">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/salaryType',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Jefe',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-salaryType">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Fijo&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-salaryType" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-salaryType"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-salaryType"></code></pre>
</span>
<span id="execution-error-POSTapi-salaryType" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-salaryType"></code></pre>
</span>
<form id="form-POSTapi-salaryType" data-method="POST"
      data-path="api/salaryType"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-salaryType', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-salaryType"
                    onclick="tryItOut('POSTapi-salaryType');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-salaryType"
                    onclick="cancelTryOut('POSTapi-salaryType');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-salaryType" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/salaryType</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-salaryType"
               value="Jefe"
               data-component="body" hidden>
    <br>
<p>El nombre del tipo de salario.</p>
        </p>
        </form>

            <h2 id="salary-type-GETapi-salaryType--id-">GET api/salaryType/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-salaryType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/salaryType/18',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-salaryType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Fijo&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-salaryType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-salaryType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-salaryType--id-"></code></pre>
</span>
<span id="execution-error-GETapi-salaryType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-salaryType--id-"></code></pre>
</span>
<form id="form-GETapi-salaryType--id-" data-method="GET"
      data-path="api/salaryType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-salaryType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-salaryType--id-"
                    onclick="tryItOut('GETapi-salaryType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-salaryType--id-"
                    onclick="cancelTryOut('GETapi-salaryType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-salaryType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/salaryType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-salaryType--id-"
               value="18"
               data-component="url" hidden>
    <br>
<p>The ID of the salaryType.</p>
            </p>
                    </form>

            <h2 id="salary-type-PUTapi-salaryType--id-">PUT api/salaryType/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-salaryType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/salaryType/2',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'Jefe',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-salaryType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Fijo&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-salaryType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-salaryType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-salaryType--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-salaryType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-salaryType--id-"></code></pre>
</span>
<form id="form-PUTapi-salaryType--id-" data-method="PUT"
      data-path="api/salaryType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-salaryType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-salaryType--id-"
                    onclick="tryItOut('PUTapi-salaryType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-salaryType--id-"
                    onclick="cancelTryOut('PUTapi-salaryType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-salaryType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/salaryType/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/salaryType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-salaryType--id-"
               value="2"
               data-component="url" hidden>
    <br>
<p>The ID of the salaryType.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-salaryType--id-"
               value="Jefe"
               data-component="body" hidden>
    <br>
<p>El nombre del tipo de salario.</p>
        </p>
        </form>

            <h2 id="salary-type-DELETEapi-salaryType--id-">DELETE api/salaryType/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-salaryType--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/salaryType/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-salaryType--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Fijo&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-salaryType--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-salaryType--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-salaryType--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-salaryType--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-salaryType--id-"></code></pre>
</span>
<form id="form-DELETEapi-salaryType--id-" data-method="DELETE"
      data-path="api/salaryType/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-salaryType--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-salaryType--id-"
                    onclick="tryItOut('DELETEapi-salaryType--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-salaryType--id-"
                    onclick="cancelTryOut('DELETEapi-salaryType--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-salaryType--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/salaryType/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-salaryType--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the salaryType.</p>
            </p>
                    </form>

        <h1 id="setting">Setting</h1>

    

            <h2 id="setting-GETapi-setting">GET api/setting</h2>

<p>
</p>



<span id="example-requests-GETapi-setting">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/setting',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-setting">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Salario minimo&quot;,
            &quot;value&quot;: 908526
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Salario minimo&quot;,
            &quot;value&quot;: 908526
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-setting" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-setting"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-setting"></code></pre>
</span>
<span id="execution-error-GETapi-setting" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-setting"></code></pre>
</span>
<form id="form-GETapi-setting" data-method="GET"
      data-path="api/setting"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-setting', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-setting"
                    onclick="tryItOut('GETapi-setting');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-setting"
                    onclick="cancelTryOut('GETapi-setting');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-setting" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/setting</code></b>
        </p>
                    </form>

            <h2 id="setting-POSTapi-setting">POST api/setting</h2>

<p>
</p>



<span id="example-requests-POSTapi-setting">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/setting',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'bplkpkezcwmzywc',
            'value' =&gt; 14,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-setting">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Salario minimo&quot;,
        &quot;value&quot;: 908526
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-setting" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-setting"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-setting"></code></pre>
</span>
<span id="execution-error-POSTapi-setting" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-setting"></code></pre>
</span>
<form id="form-POSTapi-setting" data-method="POST"
      data-path="api/setting"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-setting', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-setting"
                    onclick="tryItOut('POSTapi-setting');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-setting"
                    onclick="cancelTryOut('POSTapi-setting');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-setting" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/setting</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-setting"
               value="bplkpkezcwmzywc"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 45 characters.</p>
        </p>
                <p>
            <b><code>value</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="value"
               data-endpoint="POSTapi-setting"
               value="14"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="setting-GETapi-setting--id-">GET api/setting/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-setting--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/setting/10',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-setting--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Salario minimo&quot;,
        &quot;value&quot;: 908526
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-setting--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-setting--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-setting--id-"></code></pre>
</span>
<span id="execution-error-GETapi-setting--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-setting--id-"></code></pre>
</span>
<form id="form-GETapi-setting--id-" data-method="GET"
      data-path="api/setting/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-setting--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-setting--id-"
                    onclick="tryItOut('GETapi-setting--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-setting--id-"
                    onclick="cancelTryOut('GETapi-setting--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-setting--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/setting/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-setting--id-"
               value="10"
               data-component="url" hidden>
    <br>
<p>The ID of the setting.</p>
            </p>
                    </form>

            <h2 id="setting-PUTapi-setting--id-">PUT api/setting/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-setting--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/setting/20',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; '',
            'value' =&gt; 9,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-setting--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Salario minimo&quot;,
        &quot;value&quot;: 908526
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-setting--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-setting--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-setting--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-setting--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-setting--id-"></code></pre>
</span>
<form id="form-PUTapi-setting--id-" data-method="PUT"
      data-path="api/setting/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-setting--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-setting--id-"
                    onclick="tryItOut('PUTapi-setting--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-setting--id-"
                    onclick="cancelTryOut('PUTapi-setting--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-setting--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/setting/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/setting/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-setting--id-"
               value="20"
               data-component="url" hidden>
    <br>
<p>The ID of the setting.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-setting--id-"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be at least 3 characters.</p>
        </p>
                <p>
            <b><code>value</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="value"
               data-endpoint="PUTapi-setting--id-"
               value="9"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="setting-DELETEapi-setting--id-">DELETE api/setting/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-setting--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/setting/14',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-setting--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Salario minimo&quot;,
        &quot;value&quot;: 908526
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-setting--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-setting--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-setting--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-setting--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-setting--id-"></code></pre>
</span>
<form id="form-DELETEapi-setting--id-" data-method="DELETE"
      data-path="api/setting/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-setting--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-setting--id-"
                    onclick="tryItOut('DELETEapi-setting--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-setting--id-"
                    onclick="cancelTryOut('DELETEapi-setting--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-setting--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/setting/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-setting--id-"
               value="14"
               data-component="url" hidden>
    <br>
<p>The ID of the setting.</p>
            </p>
                    </form>

        <h1 id="strata">Strata</h1>

    

            <h2 id="strata-GETapi-strata">GET api/strata</h2>

<p>
</p>



<span id="example-requests-GETapi-strata">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/strata',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-strata">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Estato 1&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Estato 1&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-strata" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-strata"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-strata"></code></pre>
</span>
<span id="execution-error-GETapi-strata" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-strata"></code></pre>
</span>
<form id="form-GETapi-strata" data-method="GET"
      data-path="api/strata"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-strata', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-strata"
                    onclick="tryItOut('GETapi-strata');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-strata"
                    onclick="cancelTryOut('GETapi-strata');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-strata" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/strata</code></b>
        </p>
                    </form>

        <h1 id="user">User</h1>

    

            <h2 id="user-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/user',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'filter'=&gt; 'Jhonatan',
            'active'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: null,
            &quot;name&quot;: &quot;Dr. Jerry Walter II&quot;,
            &quot;last_name&quot;: null,
            &quot;identification_number&quot;: null,
            &quot;active&quot;: null,
            &quot;email&quot;: &quot;orie.kertzmann@example.org&quot;,
            &quot;base_salary&quot;: null,
            &quot;position&quot;: null
        },
        {
            &quot;id&quot;: null,
            &quot;name&quot;: &quot;Deion Crist V&quot;,
            &quot;last_name&quot;: null,
            &quot;identification_number&quot;: null,
            &quot;active&quot;: null,
            &quot;email&quot;: &quot;preston08@example.com&quot;,
            &quot;base_salary&quot;: null,
            &quot;position&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>filter</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="filter"
               data-endpoint="GETapi-user"
               value="Jhonatan"
               data-component="query" hidden>
    <br>
<p>Aplica filtro para el nombre.</p>
            </p>
                    <p>
                <b><code>active</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="active"
               data-endpoint="GETapi-user"
               value="1"
               data-component="query" hidden>
    <br>
<p>Filtro para buscar por estado activo o inactivo 1=activo, 0=inactivo.</p>
            </p>
                </form>

            <h2 id="user-POSTapi-user">POST api/user</h2>

<p>
</p>



<span id="example-requests-POSTapi-user">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/user',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'kc',
            'last_name' =&gt; 'bm',
            'second_last_name' =&gt; 'quos',
            'identification_number' =&gt; 'iure',
            'email' =&gt; 'weston92@example.org',
            'password' =&gt; 'sapiente',
            'admission_date' =&gt; '2022-02-28T14:07:37',
            'out_date' =&gt; '2022-02-28T14:07:37',
            'address' =&gt; 'id',
            'neighborhood' =&gt; 'ex',
            'birthday' =&gt; 'eum',
            'children' =&gt; 9,
            'phone' =&gt; 17,
            'base_salary' =&gt; 18,
            'position_id' =&gt; 7,
            'contract_type_id' =&gt; 6,
            'salary_type_id' =&gt; 19,
            'headquarter_id' =&gt; 10,
            'identification_type_id' =&gt; 5,
            'gender_id' =&gt; 13,
            'health_provider_id' =&gt; 16,
            'pension_fund_id' =&gt; 10,
            'civil_statu_id' =&gt; 6,
            'work_city_id' =&gt; 18,
            'residence_city_id' =&gt; 4,
            'expedition_place_id' =&gt; 12,
            'strata_id' =&gt; 3,
            'education_level_id' =&gt; 11,
            'active' =&gt; 20,
            'emergency_contact_id' =&gt; 19,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;name&quot;: &quot;Derick Metz&quot;,
        &quot;last_name&quot;: null,
        &quot;second_last_name&quot;: null,
        &quot;identification_number&quot;: null,
        &quot;admission_date&quot;: null,
        &quot;out_date&quot;: null,
        &quot;base_salary&quot;: null,
        &quot;email&quot;: &quot;bella27@example.net&quot;,
        &quot;address&quot;: null,
        &quot;neighborhood&quot;: null,
        &quot;birthday&quot;: null,
        &quot;children&quot;: null,
        &quot;phone&quot;: null,
        &quot;position&quot;: null,
        &quot;contractType&quot;: null,
        &quot;salaryType&quot;: null,
        &quot;headquarter&quot;: null,
        &quot;identificationType&quot;: null,
        &quot;gender&quot;: null,
        &quot;healthProvider&quot;: null,
        &quot;pensionFund&quot;: null,
        &quot;civilStatus&quot;: null,
        &quot;work_city&quot;: null,
        &quot;residenceCity&quot;: null,
        &quot;expeditionPlace&quot;: null,
        &quot;strata&quot;: null,
        &quot;educationLevel&quot;: null,
        &quot;emergencyContact&quot;: null,
        &quot;occupationalRiskManager&quot;: null,
        &quot;active&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user"></code></pre>
</span>
<span id="execution-error-POSTapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user"></code></pre>
</span>
<form id="form-POSTapi-user" data-method="POST"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-user"
                    onclick="tryItOut('POSTapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-user"
                    onclick="cancelTryOut('POSTapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/user</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-user"
               value="kc"
               data-component="body" hidden>
    <br>
<p>Must be at least 3 characters.</p>
        </p>
                <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="last_name"
               data-endpoint="POSTapi-user"
               value="bm"
               data-component="body" hidden>
    <br>
<p>Must be at least 3 characters.</p>
        </p>
                <p>
            <b><code>second_last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="second_last_name"
               data-endpoint="POSTapi-user"
               value="quos"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>identification_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="identification_number"
               data-endpoint="POSTapi-user"
               value="iure"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-user"
               value="weston92@example.org"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-user"
               value="sapiente"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>admission_date</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="admission_date"
               data-endpoint="POSTapi-user"
               value="2022-02-28T14:07:37"
               data-component="body" hidden>
    <br>
<p>Must be a valid date.</p>
        </p>
                <p>
            <b><code>out_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="out_date"
               data-endpoint="POSTapi-user"
               value="2022-02-28T14:07:37"
               data-component="body" hidden>
    <br>
<p>Must be a valid date.</p>
        </p>
                <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="address"
               data-endpoint="POSTapi-user"
               value="id"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>neighborhood</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="neighborhood"
               data-endpoint="POSTapi-user"
               value="ex"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>birthday</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="birthday"
               data-endpoint="POSTapi-user"
               value="eum"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>children</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="children"
               data-endpoint="POSTapi-user"
               value="9"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="phone"
               data-endpoint="POSTapi-user"
               value="17"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>base_salary</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="base_salary"
               data-endpoint="POSTapi-user"
               value="18"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>position_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="position_id"
               data-endpoint="POSTapi-user"
               value="7"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>contract_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="contract_type_id"
               data-endpoint="POSTapi-user"
               value="6"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>salary_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="salary_type_id"
               data-endpoint="POSTapi-user"
               value="19"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>headquarter_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="headquarter_id"
               data-endpoint="POSTapi-user"
               value="10"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>identification_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="identification_type_id"
               data-endpoint="POSTapi-user"
               value="5"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>gender_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="gender_id"
               data-endpoint="POSTapi-user"
               value="13"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>health_provider_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="health_provider_id"
               data-endpoint="POSTapi-user"
               value="16"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>pension_fund_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="pension_fund_id"
               data-endpoint="POSTapi-user"
               value="10"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>civil_statu_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="civil_statu_id"
               data-endpoint="POSTapi-user"
               value="6"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>work_city_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="work_city_id"
               data-endpoint="POSTapi-user"
               value="18"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>residence_city_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="residence_city_id"
               data-endpoint="POSTapi-user"
               value="4"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>expedition_place_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="expedition_place_id"
               data-endpoint="POSTapi-user"
               value="12"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>strata_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="strata_id"
               data-endpoint="POSTapi-user"
               value="3"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>education_level_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="education_level_id"
               data-endpoint="POSTapi-user"
               value="11"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>active</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="active"
               data-endpoint="POSTapi-user"
               value="20"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>emergency_contact_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="emergency_contact_id"
               data-endpoint="POSTapi-user"
               value="19"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="user-GETapi-user--id-">GET api/user/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-user--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/user/8',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-user--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;name&quot;: &quot;Miss Assunta Okuneva&quot;,
        &quot;last_name&quot;: null,
        &quot;second_last_name&quot;: null,
        &quot;identification_number&quot;: null,
        &quot;admission_date&quot;: null,
        &quot;out_date&quot;: null,
        &quot;base_salary&quot;: null,
        &quot;email&quot;: &quot;evalyn.goodwin@example.org&quot;,
        &quot;address&quot;: null,
        &quot;neighborhood&quot;: null,
        &quot;birthday&quot;: null,
        &quot;children&quot;: null,
        &quot;phone&quot;: null,
        &quot;position&quot;: null,
        &quot;contractType&quot;: null,
        &quot;salaryType&quot;: null,
        &quot;headquarter&quot;: null,
        &quot;identificationType&quot;: null,
        &quot;gender&quot;: null,
        &quot;healthProvider&quot;: null,
        &quot;pensionFund&quot;: null,
        &quot;civilStatus&quot;: null,
        &quot;work_city&quot;: null,
        &quot;residenceCity&quot;: null,
        &quot;expeditionPlace&quot;: null,
        &quot;strata&quot;: null,
        &quot;educationLevel&quot;: null,
        &quot;emergencyContact&quot;: null,
        &quot;occupationalRiskManager&quot;: null,
        &quot;active&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user--id-"></code></pre>
</span>
<span id="execution-error-GETapi-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user--id-"></code></pre>
</span>
<form id="form-GETapi-user--id-" data-method="GET"
      data-path="api/user/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user--id-"
                    onclick="tryItOut('GETapi-user--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user--id-"
                    onclick="cancelTryOut('GETapi-user--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-user--id-"
               value="8"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                    </form>

            <h2 id="user-DELETEapi-user--id-">DELETE api/user/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-user--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/user/12',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-user--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;name&quot;: &quot;Darryl Mante&quot;,
        &quot;last_name&quot;: null,
        &quot;second_last_name&quot;: null,
        &quot;identification_number&quot;: null,
        &quot;admission_date&quot;: null,
        &quot;out_date&quot;: null,
        &quot;base_salary&quot;: null,
        &quot;email&quot;: &quot;tiara.hansen@example.net&quot;,
        &quot;address&quot;: null,
        &quot;neighborhood&quot;: null,
        &quot;birthday&quot;: null,
        &quot;children&quot;: null,
        &quot;phone&quot;: null,
        &quot;position&quot;: null,
        &quot;contractType&quot;: null,
        &quot;salaryType&quot;: null,
        &quot;headquarter&quot;: null,
        &quot;identificationType&quot;: null,
        &quot;gender&quot;: null,
        &quot;healthProvider&quot;: null,
        &quot;pensionFund&quot;: null,
        &quot;civilStatus&quot;: null,
        &quot;work_city&quot;: null,
        &quot;residenceCity&quot;: null,
        &quot;expeditionPlace&quot;: null,
        &quot;strata&quot;: null,
        &quot;educationLevel&quot;: null,
        &quot;emergencyContact&quot;: null,
        &quot;occupationalRiskManager&quot;: null,
        &quot;active&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-user--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-user--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-user--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-user--id-"></code></pre>
</span>
<form id="form-DELETEapi-user--id-" data-method="DELETE"
      data-path="api/user/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-user--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-user--id-"
                    onclick="tryItOut('DELETEapi-user--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-user--id-"
                    onclick="cancelTryOut('DELETEapi-user--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-user--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/user/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-user--id-"
               value="12"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                    </form>

            <h2 id="user-PUTapi-user--id-">PUT api/user/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-user--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/user/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'y',
            'last_name' =&gt; 'tcu',
            'second_last_name' =&gt; 'et',
            'identification_number' =&gt; 'deserunt',
            'email' =&gt; 'zschulist@example.org',
            'password' =&gt; 'eveniet',
            'admission_date' =&gt; '2022-02-28T14:07:37',
            'out_date' =&gt; '2022-02-28T14:07:37',
            'address' =&gt; 'officia',
            'neighborhood' =&gt; 'error',
            'birthday' =&gt; 'praesentium',
            'children' =&gt; 19,
            'phone' =&gt; 9,
            'base_salary' =&gt; 12,
            'position_id' =&gt; 7,
            'contract_type_id' =&gt; 13,
            'salary_type_id' =&gt; 14,
            'headquarter_id' =&gt; 10,
            'identification_type_id' =&gt; 10,
            'gender_id' =&gt; 9,
            'health_provider_id' =&gt; 1,
            'pension_fund_id' =&gt; 6,
            'civil_statu_id' =&gt; 2,
            'work_city_id' =&gt; 14,
            'residence_city_id' =&gt; 3,
            'expedition_place_id' =&gt; 4,
            'strata_id' =&gt; 5,
            'education_level_id' =&gt; 15,
            'active' =&gt; 12,
            'emergency_contact_id' =&gt; 11,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-user--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;id&quot;: null,
        &quot;name&quot;: &quot;Lavada Hoeger&quot;,
        &quot;last_name&quot;: null,
        &quot;second_last_name&quot;: null,
        &quot;identification_number&quot;: null,
        &quot;admission_date&quot;: null,
        &quot;out_date&quot;: null,
        &quot;base_salary&quot;: null,
        &quot;email&quot;: &quot;elyse.bergstrom@example.org&quot;,
        &quot;address&quot;: null,
        &quot;neighborhood&quot;: null,
        &quot;birthday&quot;: null,
        &quot;children&quot;: null,
        &quot;phone&quot;: null,
        &quot;position&quot;: null,
        &quot;contractType&quot;: null,
        &quot;salaryType&quot;: null,
        &quot;headquarter&quot;: null,
        &quot;identificationType&quot;: null,
        &quot;gender&quot;: null,
        &quot;healthProvider&quot;: null,
        &quot;pensionFund&quot;: null,
        &quot;civilStatus&quot;: null,
        &quot;work_city&quot;: null,
        &quot;residenceCity&quot;: null,
        &quot;expeditionPlace&quot;: null,
        &quot;strata&quot;: null,
        &quot;educationLevel&quot;: null,
        &quot;emergencyContact&quot;: null,
        &quot;occupationalRiskManager&quot;: null,
        &quot;active&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-user--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-user--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-user--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-user--id-"></code></pre>
</span>
<form id="form-PUTapi-user--id-" data-method="PUT"
      data-path="api/user/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-user--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-user--id-"
                    onclick="tryItOut('PUTapi-user--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-user--id-"
                    onclick="cancelTryOut('PUTapi-user--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-user--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/user/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/user/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-user--id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-user--id-"
               value="y"
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="last_name"
               data-endpoint="PUTapi-user--id-"
               value="tcu"
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>second_last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="second_last_name"
               data-endpoint="PUTapi-user--id-"
               value="et"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>identification_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="identification_number"
               data-endpoint="PUTapi-user--id-"
               value="deserunt"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="email"
               data-endpoint="PUTapi-user--id-"
               value="zschulist@example.org"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="password"
               data-endpoint="PUTapi-user--id-"
               value="eveniet"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>admission_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="admission_date"
               data-endpoint="PUTapi-user--id-"
               value="2022-02-28T14:07:37"
               data-component="body" hidden>
    <br>
<p>Must be a valid date.</p>
        </p>
                <p>
            <b><code>out_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="out_date"
               data-endpoint="PUTapi-user--id-"
               value="2022-02-28T14:07:37"
               data-component="body" hidden>
    <br>
<p>Must be a valid date.</p>
        </p>
                <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="address"
               data-endpoint="PUTapi-user--id-"
               value="officia"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>neighborhood</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="neighborhood"
               data-endpoint="PUTapi-user--id-"
               value="error"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>birthday</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="birthday"
               data-endpoint="PUTapi-user--id-"
               value="praesentium"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>children</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="children"
               data-endpoint="PUTapi-user--id-"
               value="19"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="phone"
               data-endpoint="PUTapi-user--id-"
               value="9"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>base_salary</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="base_salary"
               data-endpoint="PUTapi-user--id-"
               value="12"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>position_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="position_id"
               data-endpoint="PUTapi-user--id-"
               value="7"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>contract_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="contract_type_id"
               data-endpoint="PUTapi-user--id-"
               value="13"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>salary_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="salary_type_id"
               data-endpoint="PUTapi-user--id-"
               value="14"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>headquarter_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="headquarter_id"
               data-endpoint="PUTapi-user--id-"
               value="10"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>identification_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="identification_type_id"
               data-endpoint="PUTapi-user--id-"
               value="10"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>gender_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="gender_id"
               data-endpoint="PUTapi-user--id-"
               value="9"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>health_provider_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="health_provider_id"
               data-endpoint="PUTapi-user--id-"
               value="1"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>pension_fund_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="pension_fund_id"
               data-endpoint="PUTapi-user--id-"
               value="6"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>civil_statu_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="civil_statu_id"
               data-endpoint="PUTapi-user--id-"
               value="2"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>work_city_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="work_city_id"
               data-endpoint="PUTapi-user--id-"
               value="14"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>residence_city_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="residence_city_id"
               data-endpoint="PUTapi-user--id-"
               value="3"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>expedition_place_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="expedition_place_id"
               data-endpoint="PUTapi-user--id-"
               value="4"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>strata_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="strata_id"
               data-endpoint="PUTapi-user--id-"
               value="5"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>education_level_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="education_level_id"
               data-endpoint="PUTapi-user--id-"
               value="15"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>active</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="active"
               data-endpoint="PUTapi-user--id-"
               value="12"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>emergency_contact_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="emergency_contact_id"
               data-endpoint="PUTapi-user--id-"
               value="11"
               data-component="body" hidden>
    <br>

        </p>
        </form>

            <h2 id="user-POSTapi-user-asignarConvenio--user_id-">POST api/user/asignarConvenio/{user_id}</h2>

<p>
</p>



<span id="example-requests-POSTapi-user-asignarConvenio--user_id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/user/asignarConvenio/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'covenant_id' =&gt; 1,
            'value' =&gt; 5000,
            'dues' =&gt; 9,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-user-asignarConvenio--user_id-">
</span>
<span id="execution-results-POSTapi-user-asignarConvenio--user_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-user-asignarConvenio--user_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-asignarConvenio--user_id-"></code></pre>
</span>
<span id="execution-error-POSTapi-user-asignarConvenio--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-asignarConvenio--user_id-"></code></pre>
</span>
<form id="form-POSTapi-user-asignarConvenio--user_id-" data-method="POST"
      data-path="api/user/asignarConvenio/{user_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-asignarConvenio--user_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-user-asignarConvenio--user_id-"
                    onclick="tryItOut('POSTapi-user-asignarConvenio--user_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-user-asignarConvenio--user_id-"
                    onclick="cancelTryOut('POSTapi-user-asignarConvenio--user_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-user-asignarConvenio--user_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/user/asignarConvenio/{user_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="POSTapi-user-asignarConvenio--user_id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>El id del usuario.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>covenant_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="covenant_id"
               data-endpoint="POSTapi-user-asignarConvenio--user_id-"
               value="1"
               data-component="body" hidden>
    <br>
<p>El id2 del convenio.</p>
        </p>
                <p>
            <b><code>value</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="value"
               data-endpoint="POSTapi-user-asignarConvenio--user_id-"
               value="5000"
               data-component="body" hidden>
    <br>
<p>El valor de la cuota que se le va a cobrar a éste usuario unicamente.</p>
        </p>
                <p>
            <b><code>dues</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="dues"
               data-endpoint="POSTapi-user-asignarConvenio--user_id-"
               value="9"
               data-component="body" hidden>
    <br>
<p>Las deudas totales del usuario.</p>
        </p>
        </form>

            <h2 id="user-DELETEapi-user-eliminarConvenio--user_id-">DELETE api/user/eliminarConvenio/{user_id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-user-eliminarConvenio--user_id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/user/eliminarConvenio/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'covenant_pivot_id' =&gt; 1,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-user-eliminarConvenio--user_id-">
</span>
<span id="execution-results-DELETEapi-user-eliminarConvenio--user_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-user-eliminarConvenio--user_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-user-eliminarConvenio--user_id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-user-eliminarConvenio--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-user-eliminarConvenio--user_id-"></code></pre>
</span>
<form id="form-DELETEapi-user-eliminarConvenio--user_id-" data-method="DELETE"
      data-path="api/user/eliminarConvenio/{user_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-user-eliminarConvenio--user_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-user-eliminarConvenio--user_id-"
                    onclick="tryItOut('DELETEapi-user-eliminarConvenio--user_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-user-eliminarConvenio--user_id-"
                    onclick="cancelTryOut('DELETEapi-user-eliminarConvenio--user_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-user-eliminarConvenio--user_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/user/eliminarConvenio/{user_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="DELETEapi-user-eliminarConvenio--user_id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>El id del usuario.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>covenant_pivot_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="covenant_pivot_id"
               data-endpoint="DELETEapi-user-eliminarConvenio--user_id-"
               value="1"
               data-component="body" hidden>
    <br>
<p>El id de la tabla pivot del registro que desea eliminar.</p>
        </p>
        </form>

        <h1 id="vacation">Vacation</h1>

    

            <h2 id="vacation-GETapi-vacation">GET api/vacation</h2>

<p>
</p>



<span id="example-requests-GETapi-vacation">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/vacation',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-vacation">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-vacation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-vacation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-vacation"></code></pre>
</span>
<span id="execution-error-GETapi-vacation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-vacation"></code></pre>
</span>
<form id="form-GETapi-vacation" data-method="GET"
      data-path="api/vacation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-vacation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-vacation"
                    onclick="tryItOut('GETapi-vacation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-vacation"
                    onclick="cancelTryOut('GETapi-vacation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-vacation" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/vacation</code></b>
        </p>
                    </form>

            <h2 id="vacation-POSTapi-vacation">POST api/vacation</h2>

<p>
</p>



<span id="example-requests-POSTapi-vacation">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/vacation',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'start_date' =&gt; 'YYYY-MM-DD',
            'end_date' =&gt; 'YYYY-MM-DD',
            'user_id' =&gt; 1,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-vacation">
</span>
<span id="execution-results-POSTapi-vacation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-vacation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-vacation"></code></pre>
</span>
<span id="execution-error-POSTapi-vacation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-vacation"></code></pre>
</span>
<form id="form-POSTapi-vacation" data-method="POST"
      data-path="api/vacation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-vacation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-vacation"
                    onclick="tryItOut('POSTapi-vacation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-vacation"
                    onclick="cancelTryOut('POSTapi-vacation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-vacation" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/vacation</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>start_date</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="start_date"
               data-endpoint="POSTapi-vacation"
               value="YYYY-MM-DD"
               data-component="body" hidden>
    <br>
<p>El inicio de las vacaciones.</p>
        </p>
                <p>
            <b><code>end_date</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="end_date"
               data-endpoint="POSTapi-vacation"
               value="YYYY-MM-DD"
               data-component="body" hidden>
    <br>
<p>El final de las vacaciones.</p>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="POSTapi-vacation"
               value="1"
               data-component="body" hidden>
    <br>
<p>El id del usuario.</p>
        </p>
        </form>

            <h2 id="vacation-GETapi-vacation--id-">GET api/vacation/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-vacation--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/vacation/8',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-vacation--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-vacation--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-vacation--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-vacation--id-"></code></pre>
</span>
<span id="execution-error-GETapi-vacation--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-vacation--id-"></code></pre>
</span>
<form id="form-GETapi-vacation--id-" data-method="GET"
      data-path="api/vacation/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-vacation--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-vacation--id-"
                    onclick="tryItOut('GETapi-vacation--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-vacation--id-"
                    onclick="cancelTryOut('GETapi-vacation--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-vacation--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/vacation/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-vacation--id-"
               value="8"
               data-component="url" hidden>
    <br>
<p>The ID of the vacation.</p>
            </p>
                    </form>

            <h2 id="vacation-PUTapi-vacation--id-">PUT api/vacation/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-vacation--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/vacation/11',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'start_date' =&gt; 'YYYY-MM-DD',
            'end_date' =&gt; 'YYYY-MM-DD',
            'user_id' =&gt; 1,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-vacation--id-">
</span>
<span id="execution-results-PUTapi-vacation--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-vacation--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-vacation--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-vacation--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-vacation--id-"></code></pre>
</span>
<form id="form-PUTapi-vacation--id-" data-method="PUT"
      data-path="api/vacation/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-vacation--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-vacation--id-"
                    onclick="tryItOut('PUTapi-vacation--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-vacation--id-"
                    onclick="cancelTryOut('PUTapi-vacation--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-vacation--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/vacation/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/vacation/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-vacation--id-"
               value="11"
               data-component="url" hidden>
    <br>
<p>El id de las vacaciones</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>start_date</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="start_date"
               data-endpoint="PUTapi-vacation--id-"
               value="YYYY-MM-DD"
               data-component="body" hidden>
    <br>
<p>El inicio de las vacaciones.</p>
        </p>
                <p>
            <b><code>end_date</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="end_date"
               data-endpoint="PUTapi-vacation--id-"
               value="YYYY-MM-DD"
               data-component="body" hidden>
    <br>
<p>El final de las vacaciones.</p>
        </p>
                <p>
            <b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="user_id"
               data-endpoint="PUTapi-vacation--id-"
               value="1"
               data-component="body" hidden>
    <br>
<p>El id del usuario.</p>
        </p>
        </form>

            <h2 id="vacation-DELETEapi-vacation--id-">DELETE api/vacation/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-vacation--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/vacation/6',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEapi-vacation--id-">
</span>
<span id="execution-results-DELETEapi-vacation--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-vacation--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-vacation--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-vacation--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-vacation--id-"></code></pre>
</span>
<form id="form-DELETEapi-vacation--id-" data-method="DELETE"
      data-path="api/vacation/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-vacation--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-vacation--id-"
                    onclick="tryItOut('DELETEapi-vacation--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-vacation--id-"
                    onclick="cancelTryOut('DELETEapi-vacation--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-vacation--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/vacation/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-vacation--id-"
               value="6"
               data-component="url" hidden>
    <br>
<p>The ID of the vacation.</p>
            </p>
                    </form>

            <h2 id="vacation-POSTapi-calcDays">POST api/calcDays</h2>

<p>
</p>



<span id="example-requests-POSTapi-calcDays">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/calcDays',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'start_date' =&gt; 'YYYY-MM-DD',
            'end_date' =&gt; 'YYYY-MM-DD',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-calcDays">
</span>
<span id="execution-results-POSTapi-calcDays" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-calcDays"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-calcDays"></code></pre>
</span>
<span id="execution-error-POSTapi-calcDays" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-calcDays"></code></pre>
</span>
<form id="form-POSTapi-calcDays" data-method="POST"
      data-path="api/calcDays"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-calcDays', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-calcDays"
                    onclick="tryItOut('POSTapi-calcDays');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-calcDays"
                    onclick="cancelTryOut('POSTapi-calcDays');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-calcDays" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/calcDays</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>start_date</code></b>&nbsp;&nbsp;<small>data</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="start_date"
               data-endpoint="POSTapi-calcDays"
               value="YYYY-MM-DD"
               data-component="body" hidden>
    <br>
<p>Fecha de inicio.</p>
        </p>
                <p>
            <b><code>end_date</code></b>&nbsp;&nbsp;<small>data</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="end_date"
               data-endpoint="POSTapi-calcDays"
               value="YYYY-MM-DD"
               data-component="body" hidden>
    <br>
<p>Fecha final.</p>
        </p>
        </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="PHP">PHP</button>
                            </div>
            </div>
</div>
</body>
</html>
