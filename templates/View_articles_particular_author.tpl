<!DOCTYPE html>
<html lang="en">
<head>
    <title>View  articles  for particular  writer</title>
    <title id='Description'>This demo illustrates the basic functionality of jqxDataTable. jqxDataTable is built to easily replace your HTML Tables. It can read and display the data from your HTML Table, but it can also display data from different data sources like XML, JSON, Array, CSV or TSV.
    </title>
	<meta name="description" content="JavaScript dataTable Initialization from Table example" />   	    		
    <link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />	
    <script type="text/javascript" src="../../scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxdatatable.js"></script>
    <script type="text/javascript" src="../sampledata/generatedata.js"></script>
    <script type="text/javascript" src="../../scripts/demos.js"></script>
        <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>
    

    <script type="text/javascript">
            $(document).ready(function () {
                // Create Link Button.
                $("#jqxButton").jqxLinkButton({ width: '150', height: '25' });
            });
        </script>

</head>
<body class='default'>
           <form class="form" id="form" target="form-iframe"  method="post" action="Article.php">

    <table id="table" border="1">
        <thead>
         
            <tr>
                <th align="left">Title</th>
                <th align="left">article_content</th>

            </tr>
            
        </thead>
        <tbody>
        {foreach from=$list_articles key=k item=data}

            <tr>
                <td>{$data.title}</td>
                <td>{$data.article_content}</td>

            </tr>
        {/foreach}
        </tbody>
    </table>
        
          <br><br>
        
             <div>
         <a style='margin-left: 25px;' target="_blank" href="index.php" id='jqxButton'>go to main page</a>      
                
                </div> 
        
        
               </form>
</body>
</html>