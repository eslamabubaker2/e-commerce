 <!DOCTYPE html>
<html lang="en">
<head>
<title>Gaza Market</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="AdminPanel/css/bootstrap.min.css" />
<link rel="stylesheet" href="AdminPanel/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="AdminPanel/css/fullcalendar.css" />
<link rel="stylesheet" href="AdminPanel/css/maruti-style.css" />
<link rel="stylesheet" href="AdminPanel/css/maruti-media.css" class="skin-color" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">


</head>
<body>

<!--Header-part-->


 @include('sellercp.header')
 <br><br>
<div id="content">
  
  <div class="container-fluid">
    <div class="row-fluid">
     
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Store Information</h5>
          </div>
          <div class="widget-content nopadding">
 @if($errors->any() && $errors->first() != 1)
<div class="alert alert-success">
            <h4>{{$errors->first()}}</h4>

            </div>@endif 
            @foreach($stores as $sto)
            <form action="{{url('/') }}/{{$sto->id}}/Editestoreinfo" method="post" class="form-horizontal" enctype="multipart/form-data">
             {{ csrf_field() }} 
              <div class="control-group">
                <label class="control-label">StoreName </label>
                <div class="controls">
                  <input type="text" class="span6"  name="name"  
                  value="{{$sto->name}}" required="" />
                </div>
              </div>
              


               <div class="control-group">
                <label class="control-label">Country</label>
                <div class="controls">
                 <select id="name" type="text"  class="span6" class="md-input" name="country"  required >
 <option value="{{$sto->country}}">{{$sto->country}}</option>
                                            <option value="Afghanistan"> Afghanistan (93)</option>
                                            <option value="Aland Islands"> Aland Islands (358)</option>
                                            <option value="Albania"> Albania (355)</option>
                                            <option value="Algeria "> Algeria (213)</option>
                                            <option value="American Samoa"> American Samoa (684)</option>
                                            <option value="Andorra"> Andorra (376)</option>
                                            <option value="Angola"> Angola (244)</option>
                                            <option value="Anguilla"> Anguilla (264)</option>
                                            <option value="Antarctica"> Antarctica (672)</option>
                                            <option value="Antigua and Barbuda"> Antigua and Barbuda (268)</option>
                                            <option value="Argentina "> Argentina (54)</option>
                                            <option value="Armenia"> Armenia (374)</option>
                                            <option value="Aruba"> Aruba (297)</option>
                                            <option value="Ascension Island"> Ascension Island (247)</option>
                                            <option value="Australia"> Australia (61)</option>
                                            <option value="Austria"> Austria (43)</option>
                                            <option value="Azerbaijan "> Azerbaijan (994)</option>
                                            <option value="Bahamas"> Bahamas (1-242)</option>
                                            <option value="Bahrain"> Bahrain (973)</option>
                                            <option value="Bangladesh"> Bangladesh (880)</option>
                                            <option value="Barbados"> Barbados (1-246)</option>
                                            <option value="Belarus"> Belarus (375)</option>
                                            <option value="Belgium"> Belgium (32)</option>
                                            <option value="Belize"> Belize (501)</option>
                                            <option value="Benin"> Benin (229)</option>
                                            <option value="Bermuda"> Bermuda (1-441)</option>
                                            <option value="Bhutan"> Bhutan (975)</option>
                                            <option value="Bolivia"> Bolivia (591)</option>
                                            <option value="Bosnia and Herzegovina "> Bosnia and Herzegovina (387)</option>
                                            <option value="Botswana"> Botswana (267)</option>
                                            <option value="Bouvet Island"> Bouvet Island (61)</option>
                                            <option value="Brazil"> Brazil (55)</option>
                                            <option value="British Virgin Islands"> British Virgin Islands (1-284)</option>
                                            <option value="Brunei Darussalam"> Brunei Darussalam (673)</option>
                                            <option value="Bulgaria"> Bulgaria (359)</option>
                                            <option value="Burkina Faso "> Burkina Faso (226)</option>
                                            <option value="Burundi"> Burundi (257)</option>
                                            <option value="Cambodia"> Cambodia (855)</option>
                                            <option value="Cameroon "> Cameroon (237)</option>
                                            <option value="Canada"> Canada (1)</option>
                                            <option value="Cape Verde"> Cape Verde (238)</option>
                                            <option value="Cayman Islands"> Cayman Islands (1-345)</option>
                                            <option value="Central African Republic "> Central African Republic (236)</option>
                                            <option value="Chad"> Chad (235)</option>
                                            <option value="Chile"> Chile (56)</option>
                                            <option value=" China "> China (86)</option>
                                            <option value="Christmas Island"> Christmas Island (61)</option>
                                            <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands (891)</option>
                                            <option value="Colombia"> Colombia (57)</option>
                                            <option value="Comoros"> Comoros (269)</option>
                                            <option value="Congo"> Congo (242)</option>
                                            <option value="Cook Islands"> Cook Islands (682)</option>
                                            <option value="Costa Rica"> Costa Rica (506)</option>
                                            <option value=" Cote d Ivoire "> Cote d Ivoire (225)</option>
                                            <option value="Croatia"> Croatia (385)</option>
                                            <option value="Cuba"> Cuba (53)</option>
                                            <option value="Cyprus"> Cyprus (357)</option>
                                            <option value=" Czech Republic "> Czech Republic (420)</option>
                                            <option value="Czechoslovakia"> Czechoslovakia (42)</option>
                                            <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo (243)</option>
                                            <option value="Denmark "> Denmark (45)</option>
                                            <option value="Djibouti"> Djibouti (253)</option>
                                            <option value="Dominica "> Dominica (1-767)</option>
                                            <option value="Dominican Republic "> Dominican Republic (809)</option>
                                            <option value="East Timor"> East Timor (670)</option>
                                            <option value="Ecuador"> Ecuador (593)</option>
                                            <option value="Egypt"> Egypt (20)</option>
                                            <option value="El Salvador"> El Salvador (503)</option>
                                            <option value="Equatorial Guinea"> Equatorial Guinea (240)</option>
                                            <option value="Eritrea"> Eritrea (291)</option>
                                            <option value=" Estonia"> Estonia (372)</option>
                                            <option value="Ethiopia"> Ethiopia (251)</option>
                                            <option value="FRANCE METROPOLITAN "> FRANCE METROPOLITAN (33)</option>
                                            <option value="FRENCH SOUTHERN TERRITORIES "> FRENCH SOUTHERN TERRITORIES (262)</option>
                                            <option value="Falkland Islands "> Falkland Islands (500)</option>
                                            <option value="Faroe Islands"> Faroe Islands (298)</option>
                                            <option value="Fiji"> Fiji (679)</option>
                                            <option value="Finland"> Finland (358)</option>
                                            <option value="France"> France (33)</option>
                                            <option value="French Guiana"> French Guiana (594)</option>
                                            <option value="French Polynesia"> French Polynesia (689)</option>
                                            <option value="Gabon"> Gabon (241)</option>
                                            <option value="Gambia"> Gambia (220)</option>
                                            <option value="Georgia"> Georgia (995)</option>
                                            <option value=" Germany"> Germany (49)</option>
                                            <option value="Ghana"> Ghana (233)</option>
                                            <option value="Gibraltar"> Gibraltar (350)</option>
                                            <option value="Greece"> Greece (30)</option>
                                            <option value="Greenland"> Greenland (299)</option>
                                            <option value="Grenada"> Grenada (1-473)</option>
                                            <option value="Guadeloupe"> Guadeloupe (590)</option>
                                            <option value="Guam"> Guam (1-671)</option>
                                            <option value="Guatemala"> Guatemala (502)</option>
                                            <option value="Guernsey"> Guernsey (44)</option>
                                            <option value="Guinea"> Guinea (224)</option>
                                            <option value="Guinea-Bissau"> Guinea-Bissau (245)</option>
                                            <option value="Guyana"> Guyana (592)</option>
                                            <option value=" HEARD AND MC DONALD ISLANDS "> HEARD AND MC DONALD ISLANDS (672)</option>
                                            <option value="HOLY SEE (VATICAN CITY STATE)"> HOLY SEE (VATICAN CITY STATE) (379)</option>
                                            <option value="Haiti "> Haiti (509)</option>
                                            <option value="Honduras"> Honduras (504)</option>
                                            <option value="Hong Kong"> Hong Kong (852)</option>
                                            <option value="Hungary"> Hungary (36)</option>
                                            <option value="Iceland"> Iceland (354)</option>
                                            <option value="India"> India (91)</option>
                                            <option value="Indonesia"> Indonesia (62)1</option>
                                            <option value="Iran "> Iran (98)</option>
                                            <option value="Iraq"> Iraq (964)</option>
                                            <option value="Ireland"> Ireland (353)</option>
                                            <option value="Isle of Man"> Isle of Man (222)</option>
                                            <option value="Italy"> Italy (39)</option>
                                            <option value="Jamaica"> Jamaica (876)</option>
                                            <option value="Japan"> Japan (81)</option>
                                            <option value="Jersey"> Jersey (111)</option>
                                            <option value="Jordan"> Jordan (962)</option>
                                            <option value="Kazakhstan"> Kazakhstan (7)</option>
                                            <option value="Kenya"> Kenya (254)</option>
                                            <option value="Kiribati"> Kiribati (686)</option>
                                            <option value="Korea South"> Korea South (82)</option>
                                            <option value="Kuwait"> Kuwait (965)</option>
                                            <option value="Kyrgyzstan"> Kyrgyzstan (996)</option>
                                            <option value="Laos"> Laos (856)</option>
                                            <option value="Latvia"> Latvia (371)</option>
                                            <option value="Lebanon"> Lebanon (961)</option>
                                            <option value="Lesotho"> Lesotho (266)</option>
                                            <option value="Liberia"> Liberia (231)</option>
                                            <option value="Libya"> Libya (218)</option>
                                            <option value="Liechtenstein"> Liechtenstein (423)</option>
                                            <option value="Lithuania"> Lithuania (370)</option>
                                            <option value="Luxembourg"> Luxembourg (352)</option>
                                            <option value="Macau"> Macau (853)</option>
                                            <option value="Macedonia"> Macedonia (389)</option>
                                            <option value="Madagascar"> Madagascar (261)</option>
                                            <option value="Malawi"> Malawi (265)</option>
                                            <option value="Malaysia"> Malaysia (60)</option>
                                            <option value="Maldives"> Maldives (960)</option>
                                            <option value="Mali"> Mali (223)</option>
                                            <option value="Malta"> Malta (356)</option>
                                            <option value="Marshall Islands"> Marshall Islands (692)</option>
                                            <option value="Martinique"> Martinique (596)</option>
                                            <option value="Mauritania"> Mauritania (222)</option>
                                            <option value="Mauritius"> Mauritius (230)</option>
                                            <option value="Mayotte"> Mayotte (262)</option>
                                            <option value="Mexico"> Mexico (52)</option>
                                            <option value="Micronesia"> Micronesia (691)</option>
                                            <option value="Moldova"> Moldova (373)</option>
                                            <option value="Monaco"> Monaco (377)</option>
                                            <option value="Mongolia"> Mongolia (976)</option>
                                            <option value="Montenegro"> Montenegro (382)</option>
                                            <option value="Montserrat"> Montserrat (664)</option>
                                            <option value="Morocco"> Morocco (212)</option>
                                            <option value="Mozambique"> Mozambique (258)</option>
                                            <option value="Myanmar"> Myanmar (95)</option>
                                            <option value="Namibia"> Namibia (264)</option>
                                            <option value="Nauru"> Nauru (674)</option>
                                            <option value="Nepal"> Nepal (977)</option>
                                            <option value="Netherlands"> Netherlands (31)</option>
                                            <option value="Netherlands Antilles"> Netherlands Antilles (599)</option>
                                            <option value="New Caledonia"> New Caledonia (687)</option>
                                            <option value="New Zealand"> New Zealand (64)</option>
                                            <option value="Nicaragua"> Nicaragua (505)</option>
                                            <option value="Niger"> Niger (227)</option>
                                            <option value="Nigeria"> Nigeria (234)</option>
                                            <option value="Niue"> Niue (683)</option>
                                            <option value="Norfolk Island"> Norfolk Island (672)</option>
                                            <option value="North Korea"> North Korea (850)</option>
                                            <option value="Northern Mariana"> Northern Mariana Islands (1-670)</option>
                                            <option value="Norway"> Norway (47)</option>
                                            <option value="Oman"> Oman (968)</option>
                                            <option value="Pakistan"> Pakistan (92)</option>
                                            <option value="Palau"> Palau (680)</option>
                                            <option value="Palestine"> Palestine (972)</option>
                                            <option value="Panama"> Panama (507)</option>
                                            <option value="Papua New Guinea"> Papua New Guinea (675)</option>
                                            <option value="Paraguay"> Paraguay (595)</option>
                                            <option value="Peru"> Peru (51)</option>
                                            <option value="Philippines"> Philippines (63)</option>
                                            <option value="Pitcairn"> Pitcairn (870)</option>
                                            <option value="Poland" > Poland (48)</option>
                                            <option value="Portugal"> Portugal (351)</option>
                                            <option value="Puerto Rico"> Puerto Rico (787)</option>
                                            <option value="Qatar"> Qatar (974)</option>
                                            <option value="Reunion"> Reunion (262)</option>
                                            <option value="Romania"> Romania (40)</option>
                                            <option value="Russia"> Russia (7)</option>
                                            <option value="Rwanda"> Rwanda (250)</option>
                                            <option value="SAO TOME AND PRINCIPE"> SAO TOME AND PRINCIPE (239)</option>
                                            <option value="Saint Helena"> Saint Helena (290)</option>
                                            <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis (869)</option>
                                            <option value="Saint Lucia"> Saint Lucia (1-758)</option>
                                            <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon (508)</option>
                                            <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines (784)</option>
                                            <option value="Samoa"> Samoa (685)</option>
                                            <option value="San Marino"> San Marino (378)</option>
                                            <option value="Saudi Arabia"> Saudi Arabia (966)</option>
                                            <option value="Senegal"> Senegal (221)</option>
                                            <option value="Serbia"> Serbia (381)</option>
                                            <option value="Seychelles"> Seychelles (248)</option>
                                            <option value="Sierra Leone"> Sierra Leone (232)</option>
                                            <option value="Singapore"> Singapore (65)</option>
                                            <option value="Slovak Republic"> Slovak Republic (421)</option>
                                            <option value="Slovenia"> Slovenia (386)</option>
                                            <option value="Solomon Islands"> Solomon Islands (677)</option>
                                            <option value="Somalia"> Somalia (252)</option>
                                            <option value="South Africa"> South Africa (27)</option>
                                            <option value="South Georgia and South Sandwich Islands"> South Georgia and South Sandwich Islands (500)</option>
                                            <option value="Spain"> Spain (34)</option>
                                            <option value="Sri Lanka"> Sri Lanka (94)</option>
                                            <option value="Sudan"> Sudan (249)</option>
                                            <option value="Suriname"> Suriname (597)</option>
                                            <option value="Svalbard and Jan Mayen"> Svalbard and Jan Mayen (268)</option>
                                            <option value="Swaziland"> Swaziland (268)</option>
                                            <option value="Sweden"> Sweden (46)</option>
                                            <option value="Switzerland"> Switzerland (41)</option>
                                            <option value="Syria"> Syria (963)</option>
                                            <option value="Taiwan"> Taiwan (886)</option>
                                            <option value="Tajikistan"> Tajikistan (992)</option>
                                            <option value="Tanzania"> Tanzania (255)</option>
                                            <option value="Thailand"> Thailand (66)</option>
                                            <option value="Togo"> Togo (228)</option>
                                            <option value="Tokelau"> Tokelau (690)</option>
                                            <option value="Tonga"> Tonga (676)</option>
                                            <option value="Trinidad and Tobago"> Trinidad and Tobago (868)</option>
                                            <option value="Tunisia"> Tunisia (216)</option>
                                            <option value="Turkey"> Turkey (90)</option>
                                            <option value="Turkmenistan"> Turkmenistan (993)</option>
                                            <option value="Turks and Caicos Islands"> Turks and Caicos Islands (1-649)</option>
                                            <option value="Tuvalu"> Tuvalu (688)</option>
                                            <option value="Uganda"> Uganda (256)</option>
                                            <option value="Ukraine"> Ukraine (380)</option>
                                            <option value="United Arab Emirates"> United Arab Emirates (971)</option>
                                            <option value="United Kingdom"> United Kingdom (44)</option>
                                            <option value="United States"> United States (1)</option>
                                            <option value="United States Minor Outlying Islands"> United States Minor Outlying Islands (1)</option>
                                            <option value="United States Virgin Islands"> United States Virgin Islands (1-430)</option>
                                            <option value="Uruguay"> Uruguay (598)</option>
                                            <option value="Uzbekistan"> Uzbekistan (998)</option>
                                            <option value="Vanuatu"> Vanuatu (678)</option>
                                            <option value="Venezuela"> Venezuela (58)</option>
                                            <option value="Vietnam"> Vietnam (84)</option>
                                            <option value="Wallis and Futuna"> Wallis and Futuna (681)</option>
                                            <option value="Western Sahara"> Western Sahara (212)</option>
                                            <option value="Yemen"> Yemen (967)</option>
                                            <option value="Yugoslavia "> Yugoslavia (381)</option>
                                            <option value="Zambia"> Zambia (260)</option>
                                            <option value="Zimbabwe"> Zimbabwe (263)</option>
</select>
                </div>
              </div>
                <div class="control-group">
                <label class="control-label">NO Mobile</label>
                <div class="controls">
                  <input type="text" class="span6"  name="mobile" required="" value="{{$sto->mobile}}"   />
                </div>
              </div>
       <div class="control-group">
                <label class="control-label">Address</label>
                <div class="controls">
                  <input type="text" class="span6"  name="address" placeholder="City-Area-Street" required="" value="{{$sto->address}}" />
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Facebook Link</label>
                <div class="controls">
                  <input type="text" class="span6"  name="facebook"  value="{{$sto->facebook}}"/>
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Twitter link</label>
                <div class="controls">
                  <input type="text" class="span6"  name="twitter" 
                  value="{{$sto->twitter}}"
                   />
                </div>
              </div> 
               <div class="control-group">
                <label class="control-label">Google Link</label>
                <div class="controls">
                  <input type="text" class="span6"  name="google"
                  value="{{$sto->google}}"
                   />
                </div>
              </div> 
               <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
<textarea   class="span6" name="description" required=""  
 >{{$sto->description}}</textarea>                </div>
              </div> 
               <div class="md-form-group col-lg-6">
                <label class="control-label" >Image Store</label>
                <div class="controls">
                  <input type="file" class="span6" placeholder="First name" 
                  name="img"  />
                </div>
              </div> 
   <div class="control-group">
                <label class="control-label">activation</label>
                <div class="controls">
                 <select id="name" type="text"  class="span6"class="md-input" name="activation"  required >
 <option value="{{$sto->activation}}">{{$sto->activation}}</option>
  <option value="active">active</option>
   <option value="disactive">disactive</option>
   </select></div></div>

              <div class="form-actions">
                <button type="submit" class="btn btn-success" style="width: 103px; ">Edite</button>
              </div>
             <a class="btn btn-success"  href="/sellercp" style="width: 96px; margin-top: -50px;
             float:right; margin-right: 850px;">  Cancel</a>
            </form>
          </div>
        </div> <div class="span12"></div>
      </div>@endforeach
     
    </div>
 
    
  </div>
</div>
</div>

 @include('sellercp.footer')


<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
 <script type="text/javascript">
   $(document).ready(function(){
    $('#example').DataTable();
});
 </script>
</body>
</html>