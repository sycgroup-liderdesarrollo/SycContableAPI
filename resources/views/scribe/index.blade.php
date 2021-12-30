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
                    <ul id="tocify-header-4" class="tocify-header">
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
                    <ul id="tocify-header-5" class="tocify-header">
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
                    <ul id="tocify-header-6" class="tocify-header">
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
                    <ul id="tocify-header-7" class="tocify-header">
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
                    <ul id="tocify-header-8" class="tocify-header">
                <li class="tocify-item level-1" data-unique="headquarter">
                    <a href="#headquarter">Headquarter</a>
                </li>
                                    <ul id="tocify-subheader-headquarter" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="headquarter-GETapi-headQuarter">
                        <a href="#headquarter-GETapi-headQuarter">GET api/headQuarter</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="headquarter-POSTapi-headQuarter">
                        <a href="#headquarter-POSTapi-headQuarter">POST api/headQuarter</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="headquarter-GETapi-headQuarter--id-">
                        <a href="#headquarter-GETapi-headQuarter--id-">GET api/headQuarter/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="headquarter-PUTapi-headQuarter--id-">
                        <a href="#headquarter-PUTapi-headQuarter--id-">PUT api/headQuarter/{id}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="headquarter-DELETEapi-headQuarter--id-">
                        <a href="#headquarter-DELETEapi-headQuarter--id-">DELETE api/headQuarter/{id}</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-9" class="tocify-header">
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
                    <ul id="tocify-header-10" class="tocify-header">
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
                                    <li class="tocify-item level-2" data-unique="payroll-POSTapi-payrollConcept--id---id2-">
                        <a href="#payroll-POSTapi-payrollConcept--id---id2-">POST api/payrollConcept/{id}/{id2}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="payroll-GETapi-consultDeduccion">
                        <a href="#payroll-GETapi-consultDeduccion">GET api/consultDeduccion</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-11" class="tocify-header">
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
                    <ul id="tocify-header-12" class="tocify-header">
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
                    <ul id="tocify-header-13" class="tocify-header">
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
                    <ul id="tocify-header-14" class="tocify-header">
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
                    <ul id="tocify-header-15" class="tocify-header">
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
                    <ul id="tocify-header-16" class="tocify-header">
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
                    <ul id="tocify-header-17" class="tocify-header">
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
                                    <li class="tocify-item level-2" data-unique="user-POSTapi-user-asignarConvenio--id---id2-">
                        <a href="#user-POSTapi-user-asignarConvenio--id---id2-">POST api/user/asignarConvenio/{id}/{id2}</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="user-PUTapi-user--id-">
                        <a href="#user-PUTapi-user--id-">PUT api/user/{id}</a>
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
        <li>Last updated: December 30 2021</li>
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 49
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;SyC Group&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Lefemme&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Xisfo&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;LS Building&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
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
        'json' =&gt; [
            'name' =&gt; 'SyC Group',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-businessLine">
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
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-businessLine"
               value="SyC Group"
               data-component="body" hidden>
    <br>
<p>El nombre de la linea de negocions.</p>
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
    'http://localhost:8000/api/businessLine/10',
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 48
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;SyC Group&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;users&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Jhonatan4&quot;,
                &quot;last_name&quot;: &quot;Gamboa&quot;,
                &quot;second_last_name&quot;: &quot;Velandia&quot;,
                &quot;identification_number&quot;: &quot;1232599679&quot;,
                &quot;admission_date&quot;: &quot;2021-12-30&quot;,
                &quot;out_date&quot;: &quot;2021-12-30&quot;,
                &quot;base_salary&quot;: 12000,
                &quot;email&quot;: &quot;gamboa@gmail.com&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;position_id&quot;: 1,
                &quot;business_line_id&quot;: 1,
                &quot;contract_type_id&quot;: 1,
                &quot;salary_type_id&quot;: 1,
                &quot;headquarter_id&quot;: 1,
                &quot;identification_type_id&quot;: 1,
                &quot;created_at&quot;: &quot;2021-12-30T15:57:39.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-30T16:07:53.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Prueba1&quot;,
                &quot;last_name&quot;: &quot;Gamboa&quot;,
                &quot;second_last_name&quot;: &quot;Velandia&quot;,
                &quot;identification_number&quot;: &quot;1232599678&quot;,
                &quot;admission_date&quot;: &quot;2021-12-30&quot;,
                &quot;out_date&quot;: &quot;2021-12-30&quot;,
                &quot;base_salary&quot;: 5600000,
                &quot;email&quot;: &quot;velandia@gmail.com&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;position_id&quot;: 1,
                &quot;business_line_id&quot;: 1,
                &quot;contract_type_id&quot;: 1,
                &quot;salary_type_id&quot;: 1,
                &quot;headquarter_id&quot;: 1,
                &quot;identification_type_id&quot;: 1,
                &quot;created_at&quot;: &quot;2021-12-30T18:13:21.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-30T18:18:14.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        ]
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
               value="10"
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
    'http://localhost:8000/api/businessLine/3',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'SyC Group',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-businessLine--id-">
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
               value="3"
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
        </form>

            <h2 id="business-line-DELETEapi-businessLine--id-">DELETE api/businessLine/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-businessLine--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
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

<span id="example-responses-DELETEapi-businessLine--id-">
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
               value="20"
               data-component="url" hidden>
    <br>
<p>The ID of the businessLine.</p>
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
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-concept">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 31
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Salario basico&quot;,
            &quot;calculated&quot;: 0,
            &quot;concept_type_id&quot;: 1,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Auxilio de transporte&quot;,
            &quot;calculated&quot;: 0,
            &quot;concept_type_id&quot;: 1,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Cuota de tatuajess&quot;,
            &quot;calculated&quot;: 0,
            &quot;concept_type_id&quot;: 2,
            &quot;created_at&quot;: &quot;2021-12-30T15:26:38.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-30T16:29:02.000000Z&quot;,
            &quot;deleted_at&quot;: null
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
            'name' =&gt; 'apzr',
            'calculated' =&gt; false,
            'concept_type_id' =&gt; 9,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-concept">
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
               value="apzr"
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
               value="9"
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
    'http://localhost:8000/api/concept/17',
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 30
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Salario basico&quot;,
        &quot;calculated&quot;: 0,
        &quot;concept_type_id&quot;: 1,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;payrolls&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;days_settled&quot;: 15,
                &quot;period_id&quot;: 1,
                &quot;user_id&quot;: 1,
                &quot;created_at&quot;: &quot;2021-12-30T18:29:27.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-30T18:29:27.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;concept_id&quot;: 1,
                    &quot;payroll_id&quot;: 1
                },
                &quot;period&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;5 a 19&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null
                },
                &quot;user&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Jhonatan4&quot;,
                    &quot;last_name&quot;: &quot;Gamboa&quot;,
                    &quot;second_last_name&quot;: &quot;Velandia&quot;,
                    &quot;identification_number&quot;: &quot;1232599679&quot;,
                    &quot;admission_date&quot;: &quot;2021-12-30&quot;,
                    &quot;out_date&quot;: &quot;2021-12-30&quot;,
                    &quot;base_salary&quot;: 12000,
                    &quot;email&quot;: &quot;gamboa@gmail.com&quot;,
                    &quot;email_verified_at&quot;: null,
                    &quot;position_id&quot;: 1,
                    &quot;business_line_id&quot;: 1,
                    &quot;contract_type_id&quot;: 1,
                    &quot;salary_type_id&quot;: 1,
                    &quot;headquarter_id&quot;: 1,
                    &quot;identification_type_id&quot;: 1,
                    &quot;created_at&quot;: &quot;2021-12-30T15:57:39.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2021-12-30T16:07:53.000000Z&quot;,
                    &quot;deleted_at&quot;: null
                }
            }
        ],
        &quot;covenant&quot;: null
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
               value="17"
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
    'http://localhost:8000/api/concept/2',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'ipsam',
            'calculated' =&gt; false,
            'concept_type_id' =&gt; 10,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-concept--id-">
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
               value="2"
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
               value="ipsam"
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
               value="10"
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
    'http://localhost:8000/api/concept/15',
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
               value="15"
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 33
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Devengado&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Deduccion&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
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
    'http://localhost:8000/api/conceptType/13',
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 32
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Devengado&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;concept&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Salario basico&quot;,
                &quot;calculated&quot;: 0,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null
            }
        ]
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
               value="13"
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
    'http://localhost:8000/api/conceptType/16',
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
               value="16"
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
    'http://localhost:8000/api/conceptType/2',
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
               value="2"
               data-component="url" hidden>
    <br>
<p>The ID of the conceptType.</p>
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 45
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Indefinido&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Obra o labor&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Prestacion de servicios&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Aprendizaje&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
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
    'http://localhost:8000/api/contractType/2',
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 44
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Indefinido&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;users&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Jhonatan4&quot;,
                &quot;last_name&quot;: &quot;Gamboa&quot;,
                &quot;second_last_name&quot;: &quot;Velandia&quot;,
                &quot;identification_number&quot;: &quot;1232599679&quot;,
                &quot;admission_date&quot;: &quot;2021-12-30&quot;,
                &quot;out_date&quot;: &quot;2021-12-30&quot;,
                &quot;base_salary&quot;: 12000,
                &quot;email&quot;: &quot;gamboa@gmail.com&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;position_id&quot;: 1,
                &quot;business_line_id&quot;: 1,
                &quot;contract_type_id&quot;: 1,
                &quot;salary_type_id&quot;: 1,
                &quot;headquarter_id&quot;: 1,
                &quot;identification_type_id&quot;: 1,
                &quot;created_at&quot;: &quot;2021-12-30T15:57:39.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-30T16:07:53.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Prueba1&quot;,
                &quot;last_name&quot;: &quot;Gamboa&quot;,
                &quot;second_last_name&quot;: &quot;Velandia&quot;,
                &quot;identification_number&quot;: &quot;1232599678&quot;,
                &quot;admission_date&quot;: &quot;2021-12-30&quot;,
                &quot;out_date&quot;: &quot;2021-12-30&quot;,
                &quot;base_salary&quot;: 5600000,
                &quot;email&quot;: &quot;velandia@gmail.com&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;position_id&quot;: 1,
                &quot;business_line_id&quot;: 1,
                &quot;contract_type_id&quot;: 1,
                &quot;salary_type_id&quot;: 1,
                &quot;headquarter_id&quot;: 1,
                &quot;identification_type_id&quot;: 1,
                &quot;created_at&quot;: &quot;2021-12-30T18:13:21.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-30T18:18:14.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        ]
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
               value="2"
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
    'http://localhost:8000/api/contractType/16',
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

<span id="example-responses-PUTapi-contractType--id-">
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
               value="16"
               data-component="url" hidden>
    <br>
<p>The ID of the contractType.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-contractType--id-"
               value="Indefinido"
               data-component="body" hidden>
    <br>
<p>El nombre del contrato.</p>
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
    'http://localhost:8000/api/contractType/15',
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
               value="15"
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Tatto2&quot;,
            &quot;active&quot;: 1,
            &quot;value&quot;: 12990,
            &quot;covenant_type_id&quot;: 1,
            &quot;periodicity_type_id&quot;: 1,
            &quot;concept_id&quot;: 3,
            &quot;created_at&quot;: &quot;2021-12-30T15:26:38.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-30T16:22:49.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;covenant_type&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Cuota&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null
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
            'name' =&gt; 'fugiat',
            'value' =&gt; 3,
            'covenant_type_id' =&gt; 13,
            'periodicity_type_id' =&gt; 6,
            'concept_name' =&gt; 'Cuota de convenio por salud',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-covenant">
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
               value="fugiat"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>value</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="value"
               data-endpoint="POSTapi-covenant"
               value="3"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>covenant_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="covenant_type_id"
               data-endpoint="POSTapi-covenant"
               value="13"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>periodicity_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="periodicity_type_id"
               data-endpoint="POSTapi-covenant"
               value="6"
               data-component="body" hidden>
    <br>

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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Tatto2&quot;,
        &quot;active&quot;: 1,
        &quot;value&quot;: 12990,
        &quot;covenant_type_id&quot;: 1,
        &quot;periodicity_type_id&quot;: 1,
        &quot;concept_id&quot;: 3,
        &quot;created_at&quot;: &quot;2021-12-30T15:26:38.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-12-30T16:22:49.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;covenant_type&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Cuota&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        &quot;periodicity_type&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Quincenal&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        &quot;concept&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Cuota de tatuajess&quot;,
            &quot;calculated&quot;: 0,
            &quot;concept_type_id&quot;: 2,
            &quot;created_at&quot;: &quot;2021-12-30T15:26:38.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-30T16:29:02.000000Z&quot;,
            &quot;deleted_at&quot;: null
        }
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
    'http://localhost:8000/api/covenant/14',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'ea',
            'active' =&gt; false,
            'value' =&gt; 7,
            'covenant_type_id' =&gt; 15,
            'periodicity_type_id' =&gt; 11,
            'concept_id' =&gt; 2,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-covenant--id-">
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
               value="14"
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
               value="ea"
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
            <b><code>value</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="value"
               data-endpoint="PUTapi-covenant--id-"
               value="7"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>covenant_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="covenant_type_id"
               data-endpoint="PUTapi-covenant--id-"
               value="15"
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
            <b><code>concept_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="concept_id"
               data-endpoint="PUTapi-covenant--id-"
               value="2"
               data-component="body" hidden>
    <br>

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
    'http://localhost:8000/api/covenant/11',
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
               value="11"
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 26
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: []
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Cuota&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Permanente&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
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
    'http://localhost:8000/api/covenantType/5',
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Cuota&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;covenant&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Tatto2&quot;,
                &quot;active&quot;: 1,
                &quot;value&quot;: 12990,
                &quot;covenant_type_id&quot;: 1,
                &quot;periodicity_type_id&quot;: 1,
                &quot;concept_id&quot;: 3,
                &quot;created_at&quot;: &quot;2021-12-30T15:26:38.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-30T16:22:49.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;covenant_type&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Cuota&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null
                }
            }
        ]
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
               value="5"
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
    'http://localhost:8000/api/covenantType/17',
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
               value="17"
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
    'http://localhost:8000/api/covenantType/2',
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
               value="2"
               data-component="url" hidden>
    <br>
<p>The ID of the covenantType.</p>
            </p>
                    </form>

        <h1 id="headquarter">Headquarter</h1>

    

            <h2 id="headquarter-GETapi-headQuarter">GET api/headQuarter</h2>

<p>
</p>



<span id="example-requests-GETapi-headQuarter">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/headQuarter',
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

<span id="example-responses-GETapi-headQuarter">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 41
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Pereira&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Manizales&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Medellin&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Dosquebradas&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Bogota&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-headQuarter" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-headQuarter"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-headQuarter"></code></pre>
</span>
<span id="execution-error-GETapi-headQuarter" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-headQuarter"></code></pre>
</span>
<form id="form-GETapi-headQuarter" data-method="GET"
      data-path="api/headQuarter"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-headQuarter', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-headQuarter"
                    onclick="tryItOut('GETapi-headQuarter');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-headQuarter"
                    onclick="cancelTryOut('GETapi-headQuarter');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-headQuarter" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/headQuarter</code></b>
        </p>
                    </form>

            <h2 id="headquarter-POSTapi-headQuarter">POST api/headQuarter</h2>

<p>
</p>



<span id="example-requests-POSTapi-headQuarter">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/headQuarter',
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

<span id="example-responses-POSTapi-headQuarter">
</span>
<span id="execution-results-POSTapi-headQuarter" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-headQuarter"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-headQuarter"></code></pre>
</span>
<span id="execution-error-POSTapi-headQuarter" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-headQuarter"></code></pre>
</span>
<form id="form-POSTapi-headQuarter" data-method="POST"
      data-path="api/headQuarter"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-headQuarter', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-headQuarter"
                    onclick="tryItOut('POSTapi-headQuarter');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-headQuarter"
                    onclick="cancelTryOut('POSTapi-headQuarter');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-headQuarter" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/headQuarter</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="POSTapi-headQuarter"
               value="Pereira"
               data-component="body" hidden>
    <br>
<p>El nombre de la sucursal.</p>
        </p>
        </form>

            <h2 id="headquarter-GETapi-headQuarter--id-">GET api/headQuarter/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-headQuarter--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8000/api/headQuarter/8',
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

<span id="example-responses-GETapi-headQuarter--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 40
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Pereira&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;users&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Jhonatan4&quot;,
                &quot;last_name&quot;: &quot;Gamboa&quot;,
                &quot;second_last_name&quot;: &quot;Velandia&quot;,
                &quot;identification_number&quot;: &quot;1232599679&quot;,
                &quot;admission_date&quot;: &quot;2021-12-30&quot;,
                &quot;out_date&quot;: &quot;2021-12-30&quot;,
                &quot;base_salary&quot;: 12000,
                &quot;email&quot;: &quot;gamboa@gmail.com&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;position_id&quot;: 1,
                &quot;business_line_id&quot;: 1,
                &quot;contract_type_id&quot;: 1,
                &quot;salary_type_id&quot;: 1,
                &quot;headquarter_id&quot;: 1,
                &quot;identification_type_id&quot;: 1,
                &quot;created_at&quot;: &quot;2021-12-30T15:57:39.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-30T16:07:53.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Prueba1&quot;,
                &quot;last_name&quot;: &quot;Gamboa&quot;,
                &quot;second_last_name&quot;: &quot;Velandia&quot;,
                &quot;identification_number&quot;: &quot;1232599678&quot;,
                &quot;admission_date&quot;: &quot;2021-12-30&quot;,
                &quot;out_date&quot;: &quot;2021-12-30&quot;,
                &quot;base_salary&quot;: 5600000,
                &quot;email&quot;: &quot;velandia@gmail.com&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;position_id&quot;: 1,
                &quot;business_line_id&quot;: 1,
                &quot;contract_type_id&quot;: 1,
                &quot;salary_type_id&quot;: 1,
                &quot;headquarter_id&quot;: 1,
                &quot;identification_type_id&quot;: 1,
                &quot;created_at&quot;: &quot;2021-12-30T18:13:21.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-30T18:18:14.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-headQuarter--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-headQuarter--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-headQuarter--id-"></code></pre>
</span>
<span id="execution-error-GETapi-headQuarter--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-headQuarter--id-"></code></pre>
</span>
<form id="form-GETapi-headQuarter--id-" data-method="GET"
      data-path="api/headQuarter/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-headQuarter--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-headQuarter--id-"
                    onclick="tryItOut('GETapi-headQuarter--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-headQuarter--id-"
                    onclick="cancelTryOut('GETapi-headQuarter--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-headQuarter--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/headQuarter/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-headQuarter--id-"
               value="8"
               data-component="url" hidden>
    <br>
<p>The ID of the headQuarter.</p>
            </p>
                    </form>

            <h2 id="headquarter-PUTapi-headQuarter--id-">PUT api/headQuarter/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-headQuarter--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8000/api/headQuarter/11',
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

<span id="example-responses-PUTapi-headQuarter--id-">
</span>
<span id="execution-results-PUTapi-headQuarter--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-headQuarter--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-headQuarter--id-"></code></pre>
</span>
<span id="execution-error-PUTapi-headQuarter--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-headQuarter--id-"></code></pre>
</span>
<form id="form-PUTapi-headQuarter--id-" data-method="PUT"
      data-path="api/headQuarter/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-headQuarter--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-headQuarter--id-"
                    onclick="tryItOut('PUTapi-headQuarter--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-headQuarter--id-"
                    onclick="cancelTryOut('PUTapi-headQuarter--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-headQuarter--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/headQuarter/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/headQuarter/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="PUTapi-headQuarter--id-"
               value="11"
               data-component="url" hidden>
    <br>
<p>The ID of the headQuarter.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>name</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="name"
               data-endpoint="PUTapi-headQuarter--id-"
               value="Pereira"
               data-component="body" hidden>
    <br>
<p>El nombre de la sucursal.</p>
        </p>
        </form>

            <h2 id="headquarter-DELETEapi-headQuarter--id-">DELETE api/headQuarter/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-headQuarter--id-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8000/api/headQuarter/12',
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

<span id="example-responses-DELETEapi-headQuarter--id-">
</span>
<span id="execution-results-DELETEapi-headQuarter--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-headQuarter--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-headQuarter--id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-headQuarter--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-headQuarter--id-"></code></pre>
</span>
<form id="form-DELETEapi-headQuarter--id-" data-method="DELETE"
      data-path="api/headQuarter/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-headQuarter--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-headQuarter--id-"
                    onclick="tryItOut('DELETEapi-headQuarter--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-headQuarter--id-"
                    onclick="cancelTryOut('DELETEapi-headQuarter--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-headQuarter--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/headQuarter/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="DELETEapi-headQuarter--id-"
               value="12"
               data-component="url" hidden>
    <br>
<p>The ID of the headQuarter.</p>
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 39
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Cedula de ciudadania&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;NIT&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
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
    'http://localhost:8000/api/identificationType/18',
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 38
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Cedula de ciudadania&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;users&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Jhonatan4&quot;,
                &quot;last_name&quot;: &quot;Gamboa&quot;,
                &quot;second_last_name&quot;: &quot;Velandia&quot;,
                &quot;identification_number&quot;: &quot;1232599679&quot;,
                &quot;admission_date&quot;: &quot;2021-12-30&quot;,
                &quot;out_date&quot;: &quot;2021-12-30&quot;,
                &quot;base_salary&quot;: 12000,
                &quot;email&quot;: &quot;gamboa@gmail.com&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;position_id&quot;: 1,
                &quot;business_line_id&quot;: 1,
                &quot;contract_type_id&quot;: 1,
                &quot;salary_type_id&quot;: 1,
                &quot;headquarter_id&quot;: 1,
                &quot;identification_type_id&quot;: 1,
                &quot;created_at&quot;: &quot;2021-12-30T15:57:39.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-30T16:07:53.000000Z&quot;,
                &quot;deleted_at&quot;: null
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Prueba1&quot;,
                &quot;last_name&quot;: &quot;Gamboa&quot;,
                &quot;second_last_name&quot;: &quot;Velandia&quot;,
                &quot;identification_number&quot;: &quot;1232599678&quot;,
                &quot;admission_date&quot;: &quot;2021-12-30&quot;,
                &quot;out_date&quot;: &quot;2021-12-30&quot;,
                &quot;base_salary&quot;: 5600000,
                &quot;email&quot;: &quot;velandia@gmail.com&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;position_id&quot;: 1,
                &quot;business_line_id&quot;: 1,
                &quot;contract_type_id&quot;: 1,
                &quot;salary_type_id&quot;: 1,
                &quot;headquarter_id&quot;: 1,
                &quot;identification_type_id&quot;: 1,
                &quot;created_at&quot;: &quot;2021-12-30T18:13:21.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-30T18:18:14.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        ],
        &quot;provider&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Jhonatan&quot;,
                &quot;address&quot;: &quot;prueba2&quot;,
                &quot;phone&quot;: &quot;3113012618&quot;,
                &quot;identification_number&quot;: &quot;1232599679&quot;,
                &quot;identification_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: &quot;2021-12-30T16:45:32.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        ]
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
               value="18"
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
    'http://localhost:8000/api/identificationType/9',
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
               value="9"
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
    'http://localhost:8000/api/identificationType/18',
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
               value="18"
               data-component="url" hidden>
    <br>
<p>The ID of the identificationType.</p>
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 29
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;days_settled&quot;: 15,
            &quot;period_id&quot;: 1,
            &quot;user_id&quot;: 1,
            &quot;created_at&quot;: &quot;2021-12-30T18:29:27.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-30T18:29:27.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;period&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;5 a 19&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null
            },
            &quot;user&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Jhonatan4&quot;,
                &quot;last_name&quot;: &quot;Gamboa&quot;,
                &quot;second_last_name&quot;: &quot;Velandia&quot;,
                &quot;identification_number&quot;: &quot;1232599679&quot;,
                &quot;admission_date&quot;: &quot;2021-12-30&quot;,
                &quot;out_date&quot;: &quot;2021-12-30&quot;,
                &quot;base_salary&quot;: 12000,
                &quot;email&quot;: &quot;gamboa@gmail.com&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;position_id&quot;: 1,
                &quot;business_line_id&quot;: 1,
                &quot;contract_type_id&quot;: 1,
                &quot;salary_type_id&quot;: 1,
                &quot;headquarter_id&quot;: 1,
                &quot;identification_type_id&quot;: 1,
                &quot;created_at&quot;: &quot;2021-12-30T15:57:39.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-30T16:07:53.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 2,
            &quot;days_settled&quot;: 15,
            &quot;period_id&quot;: 1,
            &quot;user_id&quot;: 2,
            &quot;created_at&quot;: &quot;2021-12-30T18:29:30.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-30T18:29:30.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;period&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;5 a 19&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null
            },
            &quot;user&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Prueba1&quot;,
                &quot;last_name&quot;: &quot;Gamboa&quot;,
                &quot;second_last_name&quot;: &quot;Velandia&quot;,
                &quot;identification_number&quot;: &quot;1232599678&quot;,
                &quot;admission_date&quot;: &quot;2021-12-30&quot;,
                &quot;out_date&quot;: &quot;2021-12-30&quot;,
                &quot;base_salary&quot;: 5600000,
                &quot;email&quot;: &quot;velandia@gmail.com&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;position_id&quot;: 1,
                &quot;business_line_id&quot;: 1,
                &quot;contract_type_id&quot;: 1,
                &quot;salary_type_id&quot;: 1,
                &quot;headquarter_id&quot;: 1,
                &quot;identification_type_id&quot;: 1,
                &quot;created_at&quot;: &quot;2021-12-30T18:13:21.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-30T18:18:14.000000Z&quot;,
                &quot;deleted_at&quot;: null
            }
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
            'days_settled' =&gt; 15,
            'period_id' =&gt; 1,
            'user_id' =&gt; 2,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-payroll">
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
            <b><code>days_settled</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="days_settled"
               data-endpoint="POSTapi-payroll"
               value="15"
               data-component="body" hidden>
    <br>
<p>Los dias trabajados.</p>
        </p>
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
    'http://localhost:8000/api/payroll/1',
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 28
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;days_settled&quot;: 15,
        &quot;period_id&quot;: 1,
        &quot;user_id&quot;: 1,
        &quot;created_at&quot;: &quot;2021-12-30T18:29:27.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-12-30T18:29:27.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;period&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;5 a 19&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        &quot;user&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Jhonatan4&quot;,
            &quot;last_name&quot;: &quot;Gamboa&quot;,
            &quot;second_last_name&quot;: &quot;Velandia&quot;,
            &quot;identification_number&quot;: &quot;1232599679&quot;,
            &quot;admission_date&quot;: &quot;2021-12-30&quot;,
            &quot;out_date&quot;: &quot;2021-12-30&quot;,
            &quot;base_salary&quot;: 12000,
            &quot;email&quot;: &quot;gamboa@gmail.com&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;position_id&quot;: 1,
            &quot;business_line_id&quot;: 1,
            &quot;contract_type_id&quot;: 1,
            &quot;salary_type_id&quot;: 1,
            &quot;headquarter_id&quot;: 1,
            &quot;identification_type_id&quot;: 1,
            &quot;created_at&quot;: &quot;2021-12-30T15:57:39.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-30T16:07:53.000000Z&quot;,
            &quot;deleted_at&quot;: null
        },
        &quot;concepts&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Salario basico&quot;,
                &quot;calculated&quot;: 0,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 1,
                    &quot;created_at&quot;: &quot;2021-12-30T18:31:20.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2021-12-30T18:31:20.000000Z&quot;,
                    &quot;count&quot;: 15,
                    &quot;unit_value&quot;: 30000,
                    &quot;total_value&quot;: 450000
                }
            },
            {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Auxilio de transporte&quot;,
                &quot;calculated&quot;: 0,
                &quot;concept_type_id&quot;: 1,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2021-12-30T18:31:46.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2021-12-30T18:31:46.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 109980,
                    &quot;total_value&quot;: 109980
                }
            },
            {
                &quot;id&quot;: 3,
                &quot;name&quot;: &quot;Cuota de tatuajess&quot;,
                &quot;calculated&quot;: 0,
                &quot;concept_type_id&quot;: 2,
                &quot;created_at&quot;: &quot;2021-12-30T15:26:38.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-30T16:29:02.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;pivot&quot;: {
                    &quot;payroll_id&quot;: 1,
                    &quot;concept_id&quot;: 3,
                    &quot;created_at&quot;: &quot;2021-12-30T18:31:55.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2021-12-30T18:31:55.000000Z&quot;,
                    &quot;count&quot;: 1,
                    &quot;unit_value&quot;: 20990,
                    &quot;total_value&quot;: 20990
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
               value="1"
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
    'http://localhost:8000/api/payroll/8',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'days_settled' =&gt; 15,
            'period_id' =&gt; 1,
            'user_id' =&gt; 2,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-payroll--id-">
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
               value="8"
               data-component="url" hidden>
    <br>
<p>The ID of the payroll.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>days_settled</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="days_settled"
               data-endpoint="PUTapi-payroll--id-"
               value="15"
               data-component="body" hidden>
    <br>
<p>Los dias trabajados.</p>
        </p>
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
    'http://localhost:8000/api/payroll/2',
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
               value="2"
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
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 27
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 2,
            &quot;days_settled&quot;: 15,
            &quot;period_id&quot;: 1,
            &quot;user_id&quot;: 2,
            &quot;created_at&quot;: &quot;2021-12-30 18:29:30&quot;,
            &quot;updated_at&quot;: &quot;2021-12-30 18:29:30&quot;,
            &quot;deleted_at&quot;: null
        }
    ]
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

            <h2 id="payroll-POSTapi-payrollConcept--id---id2-">POST api/payrollConcept/{id}/{id2}</h2>

<p>
</p>



<span id="example-requests-POSTapi-payrollConcept--id---id2-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/payrollConcept/1/2',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'count' =&gt; 15,
            'unit_value' =&gt; 30000,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-payrollConcept--id---id2-">
</span>
<span id="execution-results-POSTapi-payrollConcept--id---id2-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-payrollConcept--id---id2-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-payrollConcept--id---id2-"></code></pre>
</span>
<span id="execution-error-POSTapi-payrollConcept--id---id2-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-payrollConcept--id---id2-"></code></pre>
</span>
<form id="form-POSTapi-payrollConcept--id---id2-" data-method="POST"
      data-path="api/payrollConcept/{id}/{id2}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-payrollConcept--id---id2-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-payrollConcept--id---id2-"
                    onclick="tryItOut('POSTapi-payrollConcept--id---id2-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-payrollConcept--id---id2-"
                    onclick="cancelTryOut('POSTapi-payrollConcept--id---id2-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-payrollConcept--id---id2-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/payrollConcept/{id}/{id2}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="POSTapi-payrollConcept--id---id2-"
               value="1"
               data-component="url" hidden>
    <br>
<p>El id de la nomina a la que se le asignará el concepto.</p>
            </p>
                    <p>
                <b><code>id2</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id2"
               data-endpoint="POSTapi-payrollConcept--id---id2-"
               value="2"
               data-component="url" hidden>
    <br>
<p>El id del concepto.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>count</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="count"
               data-endpoint="POSTapi-payrollConcept--id---id2-"
               value="15"
               data-component="body" hidden>
    <br>
<p>La cantidad de veces que se cobra un concepto en la nomina.</p>
        </p>
                <p>
            <b><code>unit_value</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="unit_value"
               data-endpoint="POSTapi-payrollConcept--id---id2-"
               value="30000"
               data-component="body" hidden>
    <br>
<p>El valor unitario del concepto.</p>
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
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 25
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;nomina_id&quot;: 1,
            &quot;concepto&quot;: &quot;Cuota de tatuajess&quot;,
            &quot;tipo_concepto&quot;: &quot;Deduccion&quot;,
            &quot;convenio&quot;: &quot;Tatto2&quot;,
            &quot;nombre_usuario&quot;: &quot;Jhonatan4&quot;,
            &quot;periodo&quot;: &quot;5 a 19&quot;,
            &quot;valor_cobrado&quot;: 20990
        }
    ]
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 37
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;5 a 19&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;20 a 4&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
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
    'http://localhost:8000/api/period/13',
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 36
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;5 a 19&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null
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
               value="13"
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
    'http://localhost:8000/api/period/8',
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
               value="8"
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
    'http://localhost:8000/api/period/15',
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
               value="15"
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Quincenal&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Mensual&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
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
            'name' =&gt; 'odio',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-periodicityType">
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
               value="odio"
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
    'http://localhost:8000/api/periodicityType/18',
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Quincenal&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null,
        &quot;covenant&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Tatto2&quot;,
                &quot;active&quot;: 1,
                &quot;value&quot;: 12990,
                &quot;covenant_type_id&quot;: 1,
                &quot;periodicity_type_id&quot;: 1,
                &quot;concept_id&quot;: 3,
                &quot;created_at&quot;: &quot;2021-12-30T15:26:38.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2021-12-30T16:22:49.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;covenant_type&quot;: {
                    &quot;id&quot;: 1,
                    &quot;name&quot;: &quot;Cuota&quot;,
                    &quot;created_at&quot;: null,
                    &quot;updated_at&quot;: null,
                    &quot;deleted_at&quot;: null
                }
            }
        ]
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
               value="18"
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
    'http://localhost:8000/api/periodicityType/8',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'beatae',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-periodicityType--id-">
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
               value="8"
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
               value="beatae"
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
    'http://localhost:8000/api/periodicityType/19',
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
               value="19"
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 47
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Gerente&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Lider&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Auxiliar&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Aprendiz&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
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
    'http://localhost:8000/api/position/20',
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 46
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Gerente&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null
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
               value="20"
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
    'http://localhost:8000/api/position/13',
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
               value="13"
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
    'http://localhost:8000/api/position/10',
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
               value="10"
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 51
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Jhonatan&quot;,
            &quot;address&quot;: &quot;prueba2&quot;,
            &quot;phone&quot;: &quot;3113012618&quot;,
            &quot;identification_number&quot;: &quot;1232599679&quot;,
            &quot;identification_type_id&quot;: 1,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: &quot;2021-12-30T16:45:32.000000Z&quot;,
            &quot;deleted_at&quot;: null
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
            'name' =&gt; 'rskq',
            'address' =&gt; 'nlgyb',
            'phone' =&gt; 'ye',
            'identification_number' =&gt; 'yifio',
            'identification_type_id' =&gt; 9,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-provider">
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
               value="rskq"
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="address"
               data-endpoint="POSTapi-provider"
               value="nlgyb"
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="phone"
               data-endpoint="POSTapi-provider"
               value="ye"
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>identification_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="identification_number"
               data-endpoint="POSTapi-provider"
               value="yifio"
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>identification_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="identification_type_id"
               data-endpoint="POSTapi-provider"
               value="9"
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
    'http://localhost:8000/api/provider/10',
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 50
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Jhonatan&quot;,
        &quot;address&quot;: &quot;prueba2&quot;,
        &quot;phone&quot;: &quot;3113012618&quot;,
        &quot;identification_number&quot;: &quot;1232599679&quot;,
        &quot;identification_type_id&quot;: 1,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: &quot;2021-12-30T16:45:32.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;identification_type&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Cedula de ciudadania&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
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
               value="10"
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
    'http://localhost:8000/api/provider/10',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'ipsam',
            'address' =&gt; 'sm',
            'phone' =&gt; '',
            'identification_number' =&gt; 'sapiente',
            'identification_type_id' =&gt; 12,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-provider--id-">
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
               value="10"
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
               value="ipsam"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="address"
               data-endpoint="PUTapi-provider--id-"
               value="sm"
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="phone"
               data-endpoint="PUTapi-provider--id-"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>identification_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="identification_number"
               data-endpoint="PUTapi-provider--id-"
               value="sapiente"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>identification_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="identification_type_id"
               data-endpoint="PUTapi-provider--id-"
               value="12"
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
    'http://localhost:8000/api/provider/19',
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
               value="19"
               data-component="url" hidden>
    <br>
<p>The ID of the provider.</p>
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 43
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Fijo&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Variable&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Integral&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null,
            &quot;deleted_at&quot;: null
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
    'http://localhost:8000/api/salaryType/15',
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 42
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Fijo&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null,
        &quot;deleted_at&quot;: null
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
               value="15"
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
    'http://localhost:8000/api/salaryType/12',
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
               value="12"
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
    'http://localhost:8000/api/salaryType/15',
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
               value="15"
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 35
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Salario minimo&quot;,
            &quot;value&quot;: 908.526,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Auxilio de transporte&quot;,
            &quot;value&quot;: 106.454,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
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
            'name' =&gt; 'ffswdy',
            'value' =&gt; 15,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-setting">
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
               value="ffswdy"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 45 characters.</p>
        </p>
                <p>
            <b><code>value</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="value"
               data-endpoint="POSTapi-setting"
               value="15"
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
    'http://localhost:8000/api/setting/7',
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 34
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Salario minimo&quot;,
        &quot;value&quot;: 908.526,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
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
               value="7"
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
    'http://localhost:8000/api/setting/18',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'yg',
            'value' =&gt; 2,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-setting--id-">
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
               value="18"
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
               value="yg"
               data-component="body" hidden>
    <br>
<p>Must be at least 3 characters.</p>
        </p>
                <p>
            <b><code>value</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="value"
               data-endpoint="PUTapi-setting--id-"
               value="2"
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
    'http://localhost:8000/api/setting/8',
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
               value="8"
               data-component="url" hidden>
    <br>
<p>The ID of the setting.</p>
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
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Jhonatan4&quot;,
            &quot;last_name&quot;: &quot;Gamboa&quot;,
            &quot;second_last_name&quot;: &quot;Velandia&quot;,
            &quot;identification_number&quot;: &quot;1232599679&quot;,
            &quot;admission_date&quot;: &quot;2021-12-30&quot;,
            &quot;out_date&quot;: &quot;2021-12-30&quot;,
            &quot;base_salary&quot;: 12000,
            &quot;email&quot;: &quot;gamboa@gmail.com&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;position_id&quot;: 1,
            &quot;business_line_id&quot;: 1,
            &quot;contract_type_id&quot;: 1,
            &quot;salary_type_id&quot;: 1,
            &quot;headquarter_id&quot;: 1,
            &quot;identification_type_id&quot;: 1,
            &quot;created_at&quot;: &quot;2021-12-30T15:57:39.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-30T16:07:53.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;position&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Gerente&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null
            }
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Prueba1&quot;,
            &quot;last_name&quot;: &quot;Gamboa&quot;,
            &quot;second_last_name&quot;: &quot;Velandia&quot;,
            &quot;identification_number&quot;: &quot;1232599678&quot;,
            &quot;admission_date&quot;: &quot;2021-12-30&quot;,
            &quot;out_date&quot;: &quot;2021-12-30&quot;,
            &quot;base_salary&quot;: 5600000,
            &quot;email&quot;: &quot;velandia@gmail.com&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;position_id&quot;: 1,
            &quot;business_line_id&quot;: 1,
            &quot;contract_type_id&quot;: 1,
            &quot;salary_type_id&quot;: 1,
            &quot;headquarter_id&quot;: 1,
            &quot;identification_type_id&quot;: 1,
            &quot;created_at&quot;: &quot;2021-12-30T18:13:21.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2021-12-30T18:18:14.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;position&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Gerente&quot;,
                &quot;created_at&quot;: null,
                &quot;updated_at&quot;: null,
                &quot;deleted_at&quot;: null
            }
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
            'name' =&gt; 'kyz',
            'last_name' =&gt; '',
            'second_last_name' =&gt; 'iste',
            'identification_number' =&gt; 'aut',
            'email' =&gt; 'zita19@example.net',
            'password' =&gt; 'quia',
            'admission_date' =&gt; '2021-12-30T19:09:50',
            'out_date' =&gt; '2021-12-30T19:09:50',
            'base_salary' =&gt; 15,
            'position_id' =&gt; 10,
            'business_line_id' =&gt; 19,
            'contract_type_id' =&gt; 8,
            'salary_type_id' =&gt; 15,
            'headquarter_id' =&gt; 16,
            'identification_type_id' =&gt; 13,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-user">
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
               value="kyz"
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="last_name"
               data-endpoint="POSTapi-user"
               value=""
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>second_last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="second_last_name"
               data-endpoint="POSTapi-user"
               value="iste"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>identification_number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="identification_number"
               data-endpoint="POSTapi-user"
               value="aut"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-user"
               value="zita19@example.net"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-user"
               value="quia"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>admission_date</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="admission_date"
               data-endpoint="POSTapi-user"
               value="2021-12-30T19:09:50"
               data-component="body" hidden>
    <br>
<p>Must be a valid date.</p>
        </p>
                <p>
            <b><code>out_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="out_date"
               data-endpoint="POSTapi-user"
               value="2021-12-30T19:09:50"
               data-component="body" hidden>
    <br>
<p>Must be a valid date.</p>
        </p>
                <p>
            <b><code>base_salary</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="base_salary"
               data-endpoint="POSTapi-user"
               value="15"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>position_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="position_id"
               data-endpoint="POSTapi-user"
               value="10"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>business_line_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="business_line_id"
               data-endpoint="POSTapi-user"
               value="19"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>contract_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="contract_type_id"
               data-endpoint="POSTapi-user"
               value="8"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>salary_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="salary_type_id"
               data-endpoint="POSTapi-user"
               value="15"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>headquarter_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="headquarter_id"
               data-endpoint="POSTapi-user"
               value="16"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>identification_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="identification_type_id"
               data-endpoint="POSTapi-user"
               value="13"
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
    'http://localhost:8000/api/user/4',
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
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: true,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Jhonatan4&quot;,
        &quot;last_name&quot;: &quot;Gamboa&quot;,
        &quot;second_last_name&quot;: &quot;Velandia&quot;,
        &quot;identification_number&quot;: &quot;1232599679&quot;,
        &quot;admission_date&quot;: &quot;2021-12-30&quot;,
        &quot;out_date&quot;: &quot;2021-12-30&quot;,
        &quot;base_salary&quot;: 12000,
        &quot;email&quot;: &quot;gamboa@gmail.com&quot;,
        &quot;email_verified_at&quot;: null,
        &quot;position_id&quot;: 1,
        &quot;business_line_id&quot;: 1,
        &quot;contract_type_id&quot;: 1,
        &quot;salary_type_id&quot;: 1,
        &quot;headquarter_id&quot;: 1,
        &quot;identification_type_id&quot;: 1,
        &quot;created_at&quot;: &quot;2021-12-30T15:57:39.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-12-30T16:07:53.000000Z&quot;,
        &quot;deleted_at&quot;: null
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
               value="4"
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
    'http://localhost:8000/api/user/14',
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
               value="14"
               data-component="url" hidden>
    <br>
<p>The ID of the user.</p>
            </p>
                    </form>

            <h2 id="user-POSTapi-user-asignarConvenio--id---id2-">POST api/user/asignarConvenio/{id}/{id2}</h2>

<p>
</p>



<span id="example-requests-POSTapi-user-asignarConvenio--id---id2-">
<blockquote>Example request:</blockquote>


<div class="PHP-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8000/api/user/asignarConvenio/1/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'dues' =&gt; 9,
            'paid_dues' =&gt; 9,
            'value' =&gt; 9,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTapi-user-asignarConvenio--id---id2-">
</span>
<span id="execution-results-POSTapi-user-asignarConvenio--id---id2-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-user-asignarConvenio--id---id2-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-asignarConvenio--id---id2-"></code></pre>
</span>
<span id="execution-error-POSTapi-user-asignarConvenio--id---id2-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-asignarConvenio--id---id2-"></code></pre>
</span>
<form id="form-POSTapi-user-asignarConvenio--id---id2-" data-method="POST"
      data-path="api/user/asignarConvenio/{id}/{id2}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-asignarConvenio--id---id2-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-user-asignarConvenio--id---id2-"
                    onclick="tryItOut('POSTapi-user-asignarConvenio--id---id2-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-user-asignarConvenio--id---id2-"
                    onclick="cancelTryOut('POSTapi-user-asignarConvenio--id---id2-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-user-asignarConvenio--id---id2-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/user/asignarConvenio/{id}/{id2}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="POSTapi-user-asignarConvenio--id---id2-"
               value="1"
               data-component="url" hidden>
    <br>
<p>El id del usuario.</p>
            </p>
                    <p>
                <b><code>id2</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id2"
               data-endpoint="POSTapi-user-asignarConvenio--id---id2-"
               value="1"
               data-component="url" hidden>
    <br>
<p>El id2 del convenio.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>dues</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="dues"
               data-endpoint="POSTapi-user-asignarConvenio--id---id2-"
               value="9"
               data-component="body" hidden>
    <br>
<p>Las deudas totales del usuario.</p>
        </p>
                <p>
            <b><code>paid_dues</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="paid_dues"
               data-endpoint="POSTapi-user-asignarConvenio--id---id2-"
               value="9"
               data-component="body" hidden>
    <br>
<p>Las deudas pagadas del usuario.</p>
        </p>
                <p>
            <b><code>value</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="value"
               data-endpoint="POSTapi-user-asignarConvenio--id---id2-"
               value="9"
               data-component="body" hidden>
    <br>
<p>El valor de cada deuda.</p>
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
    'http://localhost:8000/api/user/20',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'woup',
            'last_name' =&gt; 'zv',
            'second_last_name' =&gt; 'natus',
            'identification_number' =&gt; 'omnis',
            'email' =&gt; 'monica.thompson@example.com',
            'password' =&gt; 'beatae',
            'admission_date' =&gt; '2021-12-30T19:09:50',
            'out_date' =&gt; '2021-12-30T19:09:50',
            'base_salary' =&gt; 2,
            'position_id' =&gt; 2,
            'business_line_id' =&gt; 11,
            'contract_type_id' =&gt; 16,
            'salary_type_id' =&gt; 3,
            'headquarter_id' =&gt; 20,
            'identification_type_id' =&gt; 17,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTapi-user--id-">
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
               value="20"
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
               value="woup"
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="last_name"
               data-endpoint="PUTapi-user--id-"
               value="zv"
               data-component="body" hidden>
    <br>
<p>Must be at least 5 characters.</p>
        </p>
                <p>
            <b><code>second_last_name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="second_last_name"
               data-endpoint="PUTapi-user--id-"
               value="natus"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>identification_number</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="identification_number"
               data-endpoint="PUTapi-user--id-"
               value="omnis"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="email"
               data-endpoint="PUTapi-user--id-"
               value="monica.thompson@example.com"
               data-component="body" hidden>
    <br>
<p>Must be a valid email address.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="password"
               data-endpoint="PUTapi-user--id-"
               value="beatae"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>admission_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="admission_date"
               data-endpoint="PUTapi-user--id-"
               value="2021-12-30T19:09:50"
               data-component="body" hidden>
    <br>
<p>Must be a valid date.</p>
        </p>
                <p>
            <b><code>out_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="out_date"
               data-endpoint="PUTapi-user--id-"
               value="2021-12-30T19:09:50"
               data-component="body" hidden>
    <br>
<p>Must be a valid date.</p>
        </p>
                <p>
            <b><code>base_salary</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="base_salary"
               data-endpoint="PUTapi-user--id-"
               value="2"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>position_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="position_id"
               data-endpoint="PUTapi-user--id-"
               value="2"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>business_line_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="business_line_id"
               data-endpoint="PUTapi-user--id-"
               value="11"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>contract_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="contract_type_id"
               data-endpoint="PUTapi-user--id-"
               value="16"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>salary_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="salary_type_id"
               data-endpoint="PUTapi-user--id-"
               value="3"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>headquarter_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="headquarter_id"
               data-endpoint="PUTapi-user--id-"
               value="20"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>identification_type_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="identification_type_id"
               data-endpoint="PUTapi-user--id-"
               value="17"
               data-component="body" hidden>
    <br>

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
