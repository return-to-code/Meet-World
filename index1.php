<?php
    include_once 'dbh1.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Main page</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="script1.js"></script>
    <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 15px;
      text-align: left;
    }
    #t01 {
      width: 30%;    
      background-color: #00FFFF;
    }
    </style>
</head>

<body>

    <!--header area start-->
    <input type="checkbox" id="check" checked>
    <header>
        <div class="show-section" data-id="4">
            <label for="check">
                <i class="fas fa-bars" id="sidebar_btn"></i>
            </label>
        </div>
        <div class="left_area">
            <h3>Meet <span>World</span></h3>
        </div>
        <div class="right_area">
            <p class="show-section" data-id="3"><a href="delete.php?n=$[Name]" class="logout_btn">Leave</a></p>
        </div>
    </header>
    <!--header area end-->


    <!--sidebar start-->
    <div class="sidebar">
        <!-- <p class="show-section" data-id="3"><a href="#"><i class="fas fa-home"></i><span>Dashboard</span></a></p> -->
        <p class="show-section" data-id="1"><a href="#"><i class="fas fa-desktop"></i><span>Lounge</span></a></p>
        <p class="show-section" data-id="2"><a href="#"><i class="fas fa-network-wired"></i><span>Networking</span></a>
        </p>
        <!-- <a href="#"><i class="fas fa-table"></i><span>Tables</span></a> -->
        <!-- <a href="#"><i class="fas fa-terminal"></i><span>Console</span></a> -->
        <!-- <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->
        <p class="show-section" data-id="5"><a href="#"><i class="fas fa-terminal"></i><span>Console</span></a></p>
        <p class="show-section" data-id="6"><a href="#"><i class="fas fa-gamepad"></i><span>Gaming</span></a></p>
    </div>
    <!--sidebar end-->



    <div class="content" id="content">
        <br>
        <br>
        <br>
        <br>
        <div class="Sections">
            <div id="Dashboard">
                <section data-id="3">
                    <iframe src="//www.groupboard.com/gb/814680" width="100%" height="600" scrolling="no" frameborder="0"></iframe>
                </section>
            </div>
            <div id="lounge">
                <section data-id="1">
                    Lounge
                    
                    
                                    
                    

                    <?php
                        $sql = "SELECT * FROM join_event;";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                    ?>
                    <table id="t01" style="border:1px solid black;margin-left:auto;margin-right:auto;">
                    <thead>
                      <tr>
                        <th>Name</th>
                      </tr>
                    </thead>

                    <?php
                        
                        if ($resultCheck > 0) {
                                foreach ($result as $row )
                                { 
                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $row['Name']; ?></td>
                      </tr>
                    </tbody>
                    <?php
                                }
                                
                        } 
                        else {
                                echo "No record ";  
                              }      

                        
                    ?>

                    </table>

                </section>
            </div>

            <div id="networking">
                <section data-id="2">
                <link rel="stylesheet" href="network.css">
                <ul class="cc">
                <div class="content2">


                  <li class="container"><img class="bb" src="https://cdn.pixabay.com/photo/2013/07/12/15/35/community-150125_1280.png" alt="">
                  <a href="meet.html" title="Team info" class="button">Main Table</a>
                  </li>
                  <li class="container"><img class="bb" src="https://cdn.pixabay.com/photo/2018/03/21/06/30/people-3245739_1280.png" alt="">
                  <a href="meet.html"  title="Team info" class="button">Table 1</a></li>
                  <li class="container"><img class="bb" src="https://cdn.pixabay.com/photo/2018/03/21/06/30/people-3245739_1280.png" alt="">
                  <a href="meet.html"  title="Team info" class="button">Table 2</a></li>
                  <li class="container"><img class="bb" src="https://cdn.pixabay.com/photo/2018/03/21/06/30/people-3245739_1280.png" alt="">
                  <a href="meet.html" title="Team info" class="button">Table 3</a></li>
                  <li class="container"><img class="bb" src="https://cdn.pixabay.com/photo/2018/03/21/06/30/people-3245739_1280.png" alt="">
                  <a href="meet.html"  title="Team info" class="button">Table 4</a></li>
                  <li class="container"><img class="bb" src="https://cdn.pixabay.com/photo/2018/03/21/06/30/people-3245739_1280.png" alt="">
                  <a href="meet.html"  title="Team info" class="button">Table 5</a></li>
                  <li class="container"><img class="bb" src="https://cdn.pixabay.com/photo/2018/03/21/06/30/people-3245739_1280.png" alt="">
                  <a href="meet.html"  title="Team info" class="button">Table 6</a></li>
                  <li class="container"><img class="bb" src="https://cdn.pixabay.com/photo/2018/03/21/06/30/people-3245739_1280.png" alt="">
                  <a href="meet.html"  title="Team info" class="button">Table 7</a></li>
                  <li class="container"><img class="bb" src="https://cdn.pixabay.com/photo/2018/03/21/06/30/people-3245739_1280.png" alt="">
                  <a href="meet.html"  title="Team info" class="button">Table 8</a></li>

              </ul>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
              <script src="net.js"></script>
                </section>
                <section data-id="5">
                <iframe width="1200px" height="600px"
                    src="https://gcc.godbolt.org/e#g:!((g:!((g:!((h:codeEditor,i:(fontScale:14,fontUsePx:'0',j:1,lang:c%2B%2B,source:'//+Type+your+code+here,+or+load+an+example.%0Aint+square(int+num)+%7B%0A++++return+num+*+num%3B%0A%7D'),l:'5',n:'0',o:'C%2B%2B+source+%231',t:'0')),k:50,l:'4',n:'0',o:'',s:0,t:'0'),(g:!((h:compiler,i:(compiler:g111,filters:(b:'0',binary:'1',commentOnly:'0',demangle:'0',directives:'0',execute:'1',intel:'0',libraryCode:'0',trim:'1'),fontScale:14,fontUsePx:'0',j:1,lang:c%2B%2B,libs:!(),options:'',selection:(endColumn:1,endLineNumber:1,positionColumn:1,positionLineNumber:1,selectionStartColumn:1,selectionStartLineNumber:1,startColumn:1,startLineNumber:1),source:1),l:'5',n:'0',o:'x86-64+gcc+11.1+(Editor+%231,+Compiler+%231)+C%2B%2B',t:'0')),k:50,l:'4',n:'0',o:'',s:0,t:'0')),l:'2',n:'0',o:'',t:'0')),version:4"></iframe>
            </section>
            <section data-id=6>
                <div class="info ">
                    <p><b> This section is for the entertainment purpose . Will also help to reduce anxiety level and keep your spirits high during the event. Will help in keeping good mental health as well . Hope you have a great time.</b> </p>
                    <p><b>Enjoy!</b></p>
                </div>
                <script src="https://cdn.htmlgames.com/embed.js?game=BubbleSpinner&amp;bgcolor=white" ></script>

            </section>


            </div>
            </div>
        </div>
    </div>

</body>

</html>