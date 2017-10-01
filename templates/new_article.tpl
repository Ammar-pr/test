<!DOCTYPE html>
<html lang="en">
<head>
    <title>jQuery TextArea Sample</title>
    <link rel="stylesheet" href="jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="jqwidgets/jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxtextarea.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#jqxTextArea').jqxTextArea({ width: 500, height: 500, placeHolder: 'Enter a sentence...' });
            $('#jqxTextArea').jqxTextArea('val', 'jQWidgets is a comprehensive and innovative widget library built on top of the jQuery JavaScript Library. It empowers developers to deliver professional, cross-browser compatible web applications, while significantly minimizing their development time. jQWidgets contains more than 60 UI widgets and is one of the fastest growing JavaScript UI frameworks on the Web.');
        });
    </script>
    <script>
        
        </script>
    
    <script type="text/javascript">
            $(document).ready(function () {
                var countries = new Array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe");
                $("#input").jqxInput({ placeHolder: "Enter a Country", height: 25, width: 150, minLength: 1, source: countries });
            });
        </script>
        
        
        
        
        
         <script type="text/javascript">
            $(document).ready(function () {
                // Create Push Button.
                $("#jqxButton").jqxButton({ width: '150', height: '25'});
                // Create Submit Button.
                $("#jqxSubmitButton").jqxButton({ width: '150', height: '25'});
                // Create Disabled Button
                $("#jqxDisabledButton").jqxButton({ disabled: true, width: '150', height: '25'});
                // Subscribe to Click events.
                $("#jqxButton").on('click', function () {
                    alert('Button Clicked');
                });
                $("#jqxSubmitButton").on('click', function () {
                    alert('Submit Button Clicked');
                });
            });
        </script>
        
        
        
        
        
        
        
</head>
<body>
       <form class="form" id="form" target="form-iframe"  method="post" action="Article.php">
           title :   <input type="text" id="input" name="title"/><br><br>
   article content : <textarea id="jqxTextArea" name="content_article" ></textarea>
          <div style='width: 150px;' id='jqxWidget'>
           
           
           
              
              
        </div>
   <input type="hidden" id="input" name="user_id_hidden" value="{$usuer_id}"/> <b>
   <input type="hidden" id="input" name="case_to_be" value="1"/> 
     <div>
                <input style='margin-top: 20px;' type="submit" value="Submit" id='jqxSubmitButton' />
            </div>
</body>
</html>