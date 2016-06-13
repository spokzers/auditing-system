<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <div class="card-panel">
            <div class="row">
                <div class="col s12">
                    <h4 class="header2">Search</h4>
                    <div class="divider"></div>
                    <div class="col s8">
                        <form method="get">
                            <div class="row">
                                <div class="input-field col s6">
                                    <select name="audit_by">
                                        <option value="" selected="selected">All</option>
                                        <option value="1">Administrator</option>
                                        <option value="11">عبدالعزيز وهاس</option>
                                        <option value="33">عادل شحاته بخيت</option>
                                        <option value="34">زكي سليم المحمادي</option>
                                    </select>
                                    <label for="audit_by">Inspectors</label>
                                </div>
                                <div class="col s6 input-field">
                                    <select name="audit_status">
                                        <option value="" selected="selected">All</option>
                                        <option value="1">Over Due</option>
                                        <option value="2">Completed</option>
                                    </select>
                                    <label>Audit Status</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <select id="inspection_id" name="inspection_id">
                                        <option value="" selected="selected">All</option>
                                        <option value="1">Housing Inspection</option>
                                        <option value="2">Environmental &amp; Health Inspections</option>
                                        <option value="3">Market Control Inspections</option>
                                    </select>
                                    <label for="inspection_id">Inspection</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" name="audit_id" id="audit_id">
                                    <label for="audit_id">Audit ID</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="date" name="start_date" id="start_date">
                                    <label for="start_date" class="active">Start Date</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="date" name="end_date" id="end_date">
                                    <label for="end_date" class="active">End Date</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <select class="form-control" id="audit_reason" name="audit_reason">
                                        <option value="" selected="selected">All</option>
                                        <option value="1">Complain</option>
                                        <option value="2">Routine</option>
                                        <option value="3">License Checking</option>
                                    </select>
                                    <label for="audit_reason">Reason</label>
                                </div>
                                <div class="input-field col s6">
                                    <button type="submit" class="btn teal">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col s4">
                        <div id="audit_summary" class="graph" style="height:180px;">
                            <svg height="180" version="1.1" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;">
                                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.0.1</desc>
                                <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                <path fill="none" stroke="#41cac0" d="M129.5,143.33333333333334A53.333333333333336,53.333333333333336,0,0,0,182.24075115110648,82.07172071244298" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#41cac0" stroke="#ffffff" d="M129.5,146.33333333333334A56.333333333333336,56.333333333333336,0,0,0,185.2074184033562,81.6257550025179L203.66668130624348,78.85085725187295A75,75,0,0,1,129.5,165Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#49e2d7" d="M182.24075115110648,82.07172071244298A53.333333333333336,53.333333333333336,0,0,0,97.41075357561527,47.40041422314583" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path>
                                <path fill="#49e2d7" stroke="#ffffff" d="M185.2074184033562,81.6257550025179A56.333333333333336,56.333333333333336,0,0,0,95.60573346424363,45.00418752319778L81.36613036342291,26.100621334718745A80,80,0,0,1,208.6111267266597,78.10758106866447Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#34a39b" d="M97.41075357561527,47.40041422314583A53.333333333333336,53.333333333333336,0,0,0,82.44879196098606,115.11231304587201" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#34a39b" stroke="#ffffff" d="M95.60573346424363,45.00418752319778A56.333333333333336,56.333333333333336,0,0,0,79.80216150879151,116.52488065470232L63.334238695136634,125.31419022075752A75,75,0,0,1,84.37449721570897,30.094332501298823Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#41cac0" d="M82.44879196098606,115.11231304587201A53.333333333333336,53.333333333333336,0,0,0,85.18617609893681,119.6770863750134" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#41cac0" stroke="#ffffff" d="M79.80216150879151,116.52488065470232A56.333333333333336,56.333333333333336,0,0,0,82.69352350450201,121.34642248360791L67.18368513912989,131.7334027148626A75,75,0,0,1,63.334238695136634,125.31419022075752Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#49e2d7" d="M85.18617609893681,119.6770863750134A53.333333333333336,53.333333333333336,0,0,0,88.88657448848147,124.56868688082874" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#49e2d7" stroke="#ffffff" d="M82.69352350450201,121.34642248360791A56.333333333333336,56.333333333333336,0,0,0,86.60206930345855,126.51317551787534L72.38737037442706,138.6122159261654A75,75,0,0,1,67.18368513912989,131.7334027148626Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#34a39b" d="M88.88657448848147,124.56868688082874A53.333333333333336,53.333333333333336,0,0,0,96.9628506307917,132.25847081201914" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#34a39b" stroke="#ffffff" d="M86.60206930345855,126.51317551787534A56.333333333333336,56.333333333333336,0,0,0,95.13263597877375,134.63550979519522L83.74463369955086,149.42597457940192A75,75,0,0,1,72.38737037442706,138.6122159261654Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#41cac0" d="M96.9628506307917,132.25847081201914A53.333333333333336,53.333333333333336,0,0,0,117.15975768079568,141.88605654651127" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#41cac0" stroke="#ffffff" d="M95.13263597877375,134.63550979519522A56.333333333333336,56.333333333333336,0,0,0,116.46561905034044,144.8046472272525L112.14653423861893,162.96476701853146A75,75,0,0,1,83.74463369955086,149.42597457940192Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#49e2d7" d="M117.15975768079568,141.88605654651127A53.333333333333336,53.333333333333336,0,0,0,122.55396351189117,142.87907924264857" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#49e2d7" stroke="#ffffff" d="M116.46561905034044,144.8046472272525A56.333333333333336,56.333333333333336,0,0,0,122.16324895943505,145.85352745004752L119.73213618859695,164.36120518497452A75,75,0,0,1,112.14653423861893,162.96476701853146Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <path fill="none" stroke="#34a39b" d="M122.55396351189117,142.87907924264857A53.333333333333336,53.333333333333336,0,0,0,129.48324483945652,143.33333070143885" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path>
                                <path fill="#34a39b" stroke="#ffffff" d="M122.16324895943505,145.85352745004752A56.333333333333336,56.333333333333336,0,0,0,129.48230236167595,146.33333055339477L129.47643805548574,164.9999962988984A75,75,0,0,1,119.73213618859695,164.36120518497452Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <text x="129.5" y="80" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: 800; font-stretch: normal; font-size: 15px; line-height: normal; font-family: Arial;" font-size="15px" font-weight="800" transform="matrix(1.5686,0,0,1.5686,-73.6284,-50.3235)" stroke-width="0.6375">
                                    <tspan dy="5.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Passed</tspan>
                                </text>
                                <text x="129.5" y="100" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 14px; line-height: normal; font-family: Arial;" font-size="14px" transform="matrix(1.1111,0,0,1.1111,-14.3872,-10.2222)" stroke-width="0.8999999999999999">
                                    <tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">648</tspan>
                                </text>
                            </svg>
                        </div>
                        <div class="center">Audit Conclusions</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-panel">
            <h4 class="header2">Search</h4>
            <div class="divider"></div>
            <table class="table striped">
                <thead>
                    <tr>
                        <th>Audit Count</th>
                        <th>Penalty Count</th>
                        <th>Disposal Count</th>
                        <th>Delayed Audit Count</th>
                        <th style="width: 150px;">Passed Audits</th>
                        <th>Failed Audits</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-title="Audit Count">1786</td>
                        <td data-title="Penalty Count">123000.00</td>
                        <td data-title="Disposal Count">411 Litre
                            <br>74311 KG</td>
                        <td data-title="Delayed Audit Count">22</td>
                        <td data-title="Passed Audits">1671</td>
                        <td data-title="Failed Audits">115</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-panel">
            <h4 class="header2">Audit Severity</h4>
            <div class="divider"></div>
            <!--<div id="js-audit-severity" data-highcharts-chart="0"><div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 1126px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" height="400"><desc>Created with Highcharts 4.1.6</desc><defs><clipPath id="highcharts-1"><rect x="0" y="0" width="1073" height="230"></rect></clipPath></defs><rect x="0" y="0" width="1126" height="400" strokeWidth="0" fill="#FFFFFF" class=" highcharts-background"></rect><g class="highcharts-button" style="cursor:default;" stroke-linecap="round" transform="translate(1092,10)"><title>Chart context menu</title><rect x="0.5" y="0.5" width="24" height="22" strokeWidth="1" fill="white" stroke="none" stroke-width="1" rx="2" ry="2"></rect><path fill="#E0E0E0" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5" stroke="#666" stroke-width="3" zIndex="1"></path><text x="0" zIndex="1" style="color:black;fill:black;" y="12"></text></g><g class="highcharts-grid" zIndex="1"></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 43 275.5 L 1116 275.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 43 229.5 L 1116 229.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 43 183.5 L 1116 183.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 43 137.5 L 1116 137.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 43 91.5 L 1116 91.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 43 44.5 L 1116 44.5" stroke="#D8D8D8" stroke-width="1" zIndex="1" opacity="1"></path></g><g class="highcharts-axis" zIndex="2"><path fill="none" d="M 93.5 275 L 93.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 144.5 275 L 144.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 195.5 275 L 195.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 246.5 275 L 246.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 297.5 275 L 297.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 349.5 275 L 349.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 400.5 275 L 400.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 451.5 275 L 451.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 502.5 275 L 502.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 553.5 275 L 553.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 604.5 275 L 604.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 655.5 275 L 655.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 706.5 275 L 706.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 757.5 275 L 757.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 808.5 275 L 808.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 860.5 275 L 860.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 911.5 275 L 911.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 962.5 275 L 962.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 1013.5 275 L 1013.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 1064.5 275 L 1064.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 1116.5 275 L 1116.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 42.5 275 L 42.5 285" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 43 275.5 L 1116 275.5" stroke="#C0D0E0" stroke-width="1" zIndex="7" visibility="visible"></path></g><g class="highcharts-axis" zIndex="2"></g><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(43,45) scale(1 1)" style="" clip-path="url(#highcharts-1)"><rect x="11.5" y="181.5" width="13" height="28" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="62.5" y="28.5" width="13" height="74" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="113.5" y="218.5" width="13" height="6" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="164.5" y="217.5" width="13" height="8" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="215.5" y="215.5" width="13" height="11" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="266.5" y="214.5" width="13" height="6" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="317.5" y="213.5" width="13" height="10" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="368.5" y="225.5" width="13" height="3" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="420.5" y="226.5" width="13" height="3" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="471.5" y="212.5" width="13" height="12" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="522.5" y="196.5" width="13" height="20" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="573.5" y="223.5" width="13" height="5" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="624.5" y="218.5" width="13" height="6" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="675.5" y="225.5" width="13" height="3" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="726.5" y="225.5" width="13" height="4" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="777.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="828.5" y="229.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="879.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="930.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="982.5" y="222.5" width="13" height="5" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="1033.5" y="226.5" width="13" height="2" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(43,45) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(43,45) scale(1 1)" style="" clip-path="url(#highcharts-1)"><rect x="11.5" y="209.5" width="13" height="14" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="62.5" y="102.5" width="13" height="75" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="113.5" y="224.5" width="13" height="4" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="164.5" y="225.5" width="13" height="4" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="215.5" y="226.5" width="13" height="3" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="266.5" y="220.5" width="13" height="6" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="317.5" y="223.5" width="13" height="5" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="368.5" y="228.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="420.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="471.5" y="224.5" width="13" height="5" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="522.5" y="216.5" width="13" height="9" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="573.5" y="228.5" width="13" height="2" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="624.5" y="224.5" width="13" height="4" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="675.5" y="228.5" width="13" height="2" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="726.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="777.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="828.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="879.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="930.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="982.5" y="227.5" width="13" height="2" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect><rect x="1033.5" y="228.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#434348" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(43,45) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(43,45) scale(1 1)" style="" clip-path="url(#highcharts-1)"><rect x="11.5" y="223.5" width="13" height="7" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="62.5" y="177.5" width="13" height="53" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="113.5" y="228.5" width="13" height="2" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="164.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="215.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="266.5" y="226.5" width="13" height="4" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="317.5" y="228.5" width="13" height="2" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="368.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="420.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="471.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="522.5" y="225.5" width="13" height="5" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="573.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="624.5" y="228.5" width="13" height="2" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="675.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="726.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="777.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="828.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="879.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="930.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="982.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect><rect x="1033.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#90ed7d" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(43,45) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(43,45) scale(1 1)" style="" clip-path="url(#highcharts-1)"><rect x="26.5" y="228.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="77.5" y="222.5" width="13" height="3" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="128.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="179.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="230.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="282.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="333.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="384.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="435.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="486.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="537.5" y="229.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="588.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="639.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="690.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="741.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="793.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="844.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="895.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="946.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="997.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect><rect x="1048.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f7a35c" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(43,45) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(43,45) scale(1 1)" style="" clip-path="url(#highcharts-1)"><rect x="26.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="77.5" y="225.5" width="13" height="4" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="128.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="179.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="230.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="282.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="333.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="384.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="435.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="486.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="537.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="588.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="639.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="690.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="741.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="793.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="844.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="895.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="946.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="997.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect><rect x="1048.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#8085e9" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(43,45) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(43,45) scale(1 1)" style="" clip-path="url(#highcharts-1)"><rect x="26.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="77.5" y="229.5" width="13" height="1" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="128.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="179.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="230.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="282.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="333.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="384.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="435.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="486.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="537.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="588.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="639.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="690.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="741.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="793.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="844.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="895.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="946.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="997.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect><rect x="1048.5" y="230.5" width="13" height="0" stroke="#FFFFFF" stroke-width="1" fill="#f15c80" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(43,45) scale(1 1)" clip-path="none"></g></g><text x="563" text-anchor="middle" class="highcharts-title" zIndex="4" style="color:#333333;font-size:18px;fill:#333333;width:1062px;" y="24"><tspan>Your Reportees</tspan></text><g class="highcharts-legend" zIndex="7" transform="translate(267,360)"><g zIndex="1"><g><g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)"><text x="21" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2" y="15">High(Yes)</text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#7cb5ec"></rect></g><g class="highcharts-legend-item" zIndex="1" transform="translate(104.328125,3)"><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">Medium(Yes)</text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#434348"></rect></g><g class="highcharts-legend-item" zIndex="1" transform="translate(219.34375,3)"><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">Low(Yes)</text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#90ed7d"></rect></g><g class="highcharts-legend-item" zIndex="1" transform="translate(313.015625,3)"><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">High(No)</text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#f7a35c"></rect></g><g class="highcharts-legend-item" zIndex="1" transform="translate(404.65625,3)"><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">Medium(No)</text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#8085e9"></rect></g><g class="highcharts-legend-item" zIndex="1" transform="translate(514.96875,3)"><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">Low(No)</text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#f15c80"></rect></g></g></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7"><text x="71.14034391196972" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 71.14034391196972 291)" y="291" opacity="1"><tspan>-</tspan></text><text x="122.23558200720784" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 122.23558200720784 291)" y="291" opacity="1"><tspan>مطعم</tspan></text><text x="173.33082010244593" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 173.33082010244593 291)" y="291" opacity="1"><tspan>خضروات وفواكه</tspan></text><text x="224.42605819768403" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 224.42605819768403 291)" y="291" opacity="1"><tspan>تمور ومكسرات</tspan></text><text x="275.5212962929221" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 275.5212962929221 291)" y="291" opacity="1"><tspan>سوبرماركت</tspan></text><text x="326.6165343881602" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 326.6165343881602 291)" y="291" opacity="1"><tspan>كافتيريا</tspan></text><text x="377.71177248339825" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 377.71177248339825 291)" y="291" opacity="1"><tspan>مغسلة ملابس</tspan></text><text x="428.8070105786364" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 428.8070105786364 291)" y="291" opacity="1"><tspan>مخابز</tspan></text><text x="479.90224867387445" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 479.90224867387445 291)" y="291" opacity="1"><tspan>صالون حلاقة اطفال</tspan></text><text x="530.9974867691126" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 530.9974867691126 291)" y="291" opacity="1"><tspan>صالون حلاقة رجالي</tspan></text><text x="582.0927248643507" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 582.0927248643507 291)" y="291" opacity="1"><tspan>مقاهي و كوفي شوب</tspan></text><text x="633.1879629595887" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 633.1879629595887 291)" y="291" opacity="1"><tspan>بقالة و ميني ماركت</tspan></text><text x="684.2832010548268" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 684.2832010548268 291)" y="291" opacity="1"><tspan>حلويات غربية وشرقية</tspan></text><text x="735.378439150065" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 735.378439150065 291)" y="291" opacity="1"><tspan>اكشاك</tspan></text><text x="786.4736772453031" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 786.4736772453031 291)" y="291" opacity="1"><tspan>متعهد اعاشة</tspan></text><text x="837.5689153405411" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 837.5689153405411 291)" y="291" opacity="1"><tspan>مسابح ونوادي رياضية</tspan></text><text x="888.6641534357792" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 888.6641534357792 291)" y="291" opacity="1"><tspan>كشف جديد</tspan></text><text x="939.7593915310173" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 939.7593915310173 291)" y="291" opacity="1"><tspan>مسالخ</tspan></text><text x="990.8546296262554" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 990.8546296262554 291)" y="291" opacity="1"><tspan>هايبرماركت</tspan></text><text x="1041.9498677214935" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 1041.9498677214935 291)" y="291" opacity="1"><tspan>عصيرات</tspan></text><text x="1093.0451058167316" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:400px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 1093.0451058167316 291)" y="291" opacity="1"><tspan>ايس كريم</tspan></text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"><text x="28" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:362px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="280" opacity="1">0k</text><text x="28" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:362px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="234" opacity="1">10k</text><text x="28" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:362px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="188" opacity="1">20k</text><text x="28" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:362px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="142" opacity="1">30k</text><text x="28" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:362px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="96" opacity="1">40k</text><text x="28" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:362px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="50" opacity="1">50k</text></g><g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(256,-9999)" opacity="0" visibility="visible"><path fill="none" d="M 3.5 0.5 L 117.5 0.5 C 120.5 0.5 120.5 0.5 120.5 3.5 L 120.5 57.5 C 120.5 60.5 120.5 60.5 117.5 60.5 L 65.5 60.5 59.5 66.5 53.5 60.5 3.5 60.5 C 0.5 60.5 0.5 60.5 0.5 57.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)" width="120" height="60"></path><path fill="none" d="M 3.5 0.5 L 117.5 0.5 C 120.5 0.5 120.5 0.5 120.5 3.5 L 120.5 57.5 C 120.5 60.5 120.5 60.5 117.5 60.5 L 65.5 60.5 59.5 66.5 53.5 60.5 3.5 60.5 C 0.5 60.5 0.5 60.5 0.5 57.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)" width="120" height="60"></path><path fill="none" d="M 3.5 0.5 L 117.5 0.5 C 120.5 0.5 120.5 0.5 120.5 3.5 L 120.5 57.5 C 120.5 60.5 120.5 60.5 117.5 60.5 L 65.5 60.5 59.5 66.5 53.5 60.5 3.5 60.5 C 0.5 60.5 0.5 60.5 0.5 57.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)" width="120" height="60"></path><path fill="rgba(249, 249, 249, .85)" d="M 3.5 0.5 L 117.5 0.5 C 120.5 0.5 120.5 0.5 120.5 3.5 L 120.5 57.5 C 120.5 60.5 120.5 60.5 117.5 60.5 L 65.5 60.5 59.5 66.5 53.5 60.5 3.5 60.5 C 0.5 60.5 0.5 60.5 0.5 57.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#434348" stroke-width="1"></path><text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="20"><tspan style="font-weight:bold">كافتيريا</tspan><tspan x="8" dy="15">Medium(Yes): 1261</tspan><tspan x="8" dy="15">Total: 3525</tspan></text></g><text x="1116" text-anchor="end" zIndex="8" style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="395">Highcharts.com</text></svg></div></div>-->
        </div>
        <div class="card-panel">
            <h4 class="header4">Other Audits</h4>
            <div class="divider"></div>
            <table class="table striped">
                <thead>
                    <tr>
                        <td>Location</td>
                        <td>Inspector</td>
                        <td>Scheduled Date</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><a href="javascript:void(0)" onclick="get_more_audits()">Load more</a></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-panel">
            <div class="container row">
                <h4 class="header2 left">Audits Scheduled</h4>
                <h4 class="header2 right">Total Records : 1786 </h2>
                </div>
                <div class="divider"></div>

                    <table class="table bordered striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Inspectors</th>
                                <th>Template</th>
                                <th>Facility Name</th>
                                <th>Date of Audit</th>
                                <th>Started At</th>
                                <th>Ended At</th>
                                <th>Disposals</th>
                                <th>Penalty</th>
                                <th>Reason</th>
                                <th>Action</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                              <!-- <td colspan="11" class="center"><strong>Housing Inspection</strong></td> -->
                            <?php
                            foreach ($audits as $audit) {
                 
                                echo "<tr>";
                                echo "<td data-title='ID'> $audit->id </td>";
                                echo "<td data-title='Inspectors'>";
                                foreach ($inspectors as $inspector) {
                                     if($audit->id_inspector == $inspector->id){
                                        echo  $inspector->name;
                                     }
                                 }

                                "</td>";
                                echo "<td data-title='Template'>";
                                 foreach ($templates as $template) {
                                     if($audit->id_templates == $template->id){
                                        echo  $template->title;
                                     }
                                 }
                                 
                                 echo "</td>";
                                 $bool = false;
                                 foreach ($facilities as $facility) {

                                    if($facility->id == $audit->id_facility){
                                    echo "<td data-title='Audit Date'>$facility->name</td>";
                                    $bool = true;
                                    }
                                 }
                                 if(!$bool){
                                    echo "<td data-title='Audit Date'>No Facility Found</td>";
                                 }
                                 

                                echo "<td data-title='Audit Date'>$audit->doa</td>";
                                echo "<td data-title='Started At'>$audit->started_at</td>";
                                echo "<td data-title='Ended At'>$audit->ended_at</td>";
                                echo "<td data-title='Disposals'>$audit->disposals</td>";
                                echo "<td data-title='Penalties'>$audit->penalty</td>";
                                $temp = get_audit_reason($audit->reason);
                                echo "<td>$temp</td>";

                                $today = new DateTime('');
                                $expireDate = new DateTime( $audit->doa);
                                $color = 'amber';
                                if($today->format("Y-m-d") > $expireDate->format("Y-m-d")){
                                    $color = 'red';
                                }
                                $temp_url = base_url()."index.php/audit/audit_launch/".$audit->id;
                                $report_url = base_url()."index.php/pdfdom/audit_report/".$audit->id;
                                echo "<td>";
                                if($audit->status == 2){
                                    //$report_url
                                    //#$audit->id
                                    echo"<a href='#$audit->id' class='modal-trigger'><button class='btn btn-floating small green'><i class='mdi-action-assignment'></i>View Report</button></a>";
                                    // <!-- Modal Structure -->
                                     echo '<div id='.$audit->id.' class="modal modal-fixed-footer" style="width:33%;height:50%">
                                        <div class="white-text teal center" style="top:0;border-bottom: 1px solid rgba(0, 0, 0, 0.1);padding:10px;">
                                            <p style="font-weight: 300;">Audit Report Options</p>
                                        </div>
                                        <div class="modal-content">
                                            <div class="row" style="margin-bottom:5px">
                                                <div class="col s12">
                                                    <button id="img" value="0" style="width:50%" class="active btn green left">Without Images</button>
                                                    <button id="img" value="1" style="width:50%" class="btn grey">With Images</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12" style="margin-bottom:15px">
                                                    <button id="vio" value="0" style="width:50%" class="active btn blue left">Violations Only</button>
                                                    <button id="vio" value="1" style="width:50%" class="btn grey">Complete</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s6">
                                                    <p>Send Email to Client</p>
                                                </div>
                                                <div class="col s6">
                                                    <button id="email" value="1" style="width:50%" class="btn indigo left">Yes</button>
                                                    <button id="email" value="0" style="width:50%" class="active btn grey">No</button>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="modal-footer">
                                             <a href="#!" id="submit_report" data-audit-id="'.$audit->id.'" class="waves-effect white-text blue btn-flat modal-action">Submit</a>
                                             <a href="#!" style="margin-left:5px;" class="waves-effect white-text amber btn-flat modal-action modal-close">Close</a>
                                         </div>
                                       </div>';
                                }else{
                                echo"<a href='$temp_url'><button class='btn btn-floating small $color'><i class='mdi-action-assignment'></i>Launch</button></a>";
                                }
                                $temp_url = base_url()."index.php/audit/delete/".$audit->id;
                                echo "<a href='$temp_url'><button class='btn btn-floating small red'><i class='mdi-action-delete'></i>Delete</button></a></td>";
                            echo "</tr>";
                            }
                            ?>
                           
                        </tbody>
                    </table>

        </div>
        <!-- Modal -->
            <div id="lateModal" class="modal">
                <div class="modal-content">
                      <h4>Why was the Audit Late?</h4>
                <div class="input-field">
                    <textarea style="height:250px" length="120" placeholder="Enter your remarks here" name="comment" class="materialize-textarea" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Save</a>
                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Close</a>
            </div>
        </div>
        <!--end container-->
</section>
<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->

