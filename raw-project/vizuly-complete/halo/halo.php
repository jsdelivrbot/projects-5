<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Lordier</title>
        <link rel="stylesheet" href="http://lordier.fr/mainfile/mystyle.css" />
    </head>

    <body>
        <form>
            <div class="wrapper">
                <h1><span>Halo View</span></h1>
                
                    <div class="left-div" style="padding-top:13%;">
                        <form name="uplodad" action="new.php" method="post">
                        
                        </form>
                        <form name="upload" action="file_halo.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="name">
                            <input type="submit" name="submit" class="submit" value="Upload CSV File">
                        </form>
                    </div>
                
                
                <div class="left-div" style="border-right:none;">
                    <a download href="data/halo_contributions_house-sample.csv">
                        Download Sample CSV
                    </a>
                </div>
            </div>
        </form>
    </body>
</html>
