<!DOCTYPE html>
<html lang="en">
<head>
    <title>show all article</title>
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

</head>
<body class='default'>
           <form class="form" id="form" target="form-iframe"  method="post" action="Article.php">

    <table id="table" border="1">
        <thead>
         
            <tr>
                <th align="left">Title</th>
                <th align="left">article_content</th>
                <th align="right"> delete the article
</th>
            </tr>
            
        </thead>
        <tbody>
        {foreach from=$list_articles key=k item=data}

            <tr>
                <td>{$data.title}</td>
                <td>{$data.article_content}</td>
                <td> <a href="Article.php?id={$data.id}&case_to_be=5">delete<a /></td>
                  <input type="hidden" id="input" name="title" value="{$data.title}"/> <br><br>
                   <input type="hidden" id="input" name="id" value="{$data.id}"/> <br><br>
                 <input type="hidden" id="input" name="case_to_be" value="5"/> <br><br>

            </tr>
        {/foreach}
        </tbody>
    </table>
               </form>
</body>
</html>