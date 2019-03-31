<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Greenopedia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->
    <style>
        input,
        textarea {
            border: 1px solid black;
        }

        .pad {
            margin: 20px;
        }

        .flex {
            display: flex;
        }

        .description,
        .known,
        .leaves,
        .bark,
        .flowers,
        .fruits {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
        <section>
            <form class="flex pad">
                <div class="description">
                    <div>
                        <p>common name:</p>
                        <input/>
                    </div>
                    <div>
                        <p>
                            scientific name:</p>
                        <input/>
                    </div>
                    <div>
                        <p>type</p>
                        <input/>
                    </div>
                    <div>
                        <p>description:</p>
                        <textarea rows="4"></textarea>
                    </div>
                    <div>
                        <p>Location</p>
                        <input/>
                    </div>
                </div>
                <div class="details flex ">
                    <div class="known pad">
                        <h4>Known</h4>
                        <div>
                            <p>1</p>
                            <input/>
                        </div>
                        <div>
                            <p>2</p>
                            <input/>
                        </div>
                        <div>
                            <p>3</p>
                            <input/>
                        </div>
                        <div>
                            <p>4</p>
                            <input/>
                        </div>
                    </div>

                    <div class="leaves pad">
                        <h4>Leaves</h4>
                        <div>
                            <p>1</p>
                            <input/>
                        </div>
                        <div>
                            <p>2</p>
                            <input/>
                        </div>
                        <div>
                            <p>3</p>
                            <input/>
                        </div>
                        <div>
                            <p>4</p>
                            <input/>
                        </div>
                    </div>

                    <div class="bark pad">
                        <h4>Bark</h4>
                        <div>
                            <p>1</p>
                            <input/>
                        </div>
                        <div>
                            <p>2</p>
                            <input/>
                        </div>
                        <div>
                            <p>3</p>
                            <input/>
                        </div>
                        <div>
                            <p>4</p>
                            <input/>
                        </div>
                    </div>

                    <div class="flowers pad">
                        <h4>Flower</h4>
                        <div>
                            <p>1</p>
                            <input/>
                        </div>
                        <div>
                            <p>2</p>
                            <input/>
                        </div>
                        <div>
                            <p>3</p>
                            <input/>
                        </div>
                        <div>
                            <p>4</p>
                            <input/>
                        </div>
                    </div>

                    <div class="fruits pad">
                        <h4>Fruits:</h4>
                        <div>
                            <p>1</p>
                            <input/>
                        </div>
                        <div>
                            <p>2</p>
                            <input/>
                        </div>
                        <div>
                            <p>3</p>
                            <input/>
                        </div>
                        <div>
                            <p>4</p>
                            <input/>
                        </div>
                    </div>
                </div>
                
        </section>
        <div>
        <input type="submit" />
            </form>
            <?php
        include('dbconfig.php');
            echo "heelllo";
            $sql="SELECT * FROM greenopedia1 WHERE mostcommonname='$page'" ;
$sql = "INSERT INTO `greenopedia1` (`ID`, `intial`, `mostcommonname`, `scientificname`, `type`, `description`, `common1`, `common2`, `common3`, `common4`, `leaves1`, `leaves2`, `leaves3`, `leaves4`, `bark1`, `bark2`, `bark3`, `bark4`, `flowers1`, `flowers2`, `flowers3`, `flowers4`, `fruits1`, `fruits2`, `fruits3`, `fruits4`, `link1`, `link2`, `location`) VALUES (NULL, 'A', 'African Tulip Tree', 'Spathodea campanulata', 'Evergreen', 'One of the world''s most spectacular flowering trees. It is a robust tree, grows between 7 to 25 m (23 to 82 ft) tall and is native to tropical dry forests of Africa. It has a dense, dark, shining, green crown.The tree has a stout, tapering, somewhat buttressed trunk covered in warty light gray bark. The lateral branches are short and thick. This tree is planted extensively as an ornamental tree throughout the tropics.', 'Fountain Tree', 'Scarlet Bell Tree', 'Nandi Flame', 'Rugtoora', 'Large(Upto 50cm long) and pinnate', 'Bronze when young and Glossy, deep green when mature', 'Leaflets are broadly oval ', 'Leaflets(Upto 15cm long) are deeply veined ', 'Pale grey-brown ', 'Smooth when young', 'Turns grey-black after ageing', '', 'Showy, reddish-orange in color', 'They are bell shaped ', 'Flower bud contains water and it is ampule shaped', 'Peak bloom is during spring', 'Brown Large, elongated,', 'Slightly flattened pods', 'Turn from green to brown as they mature', 'Each pod contains about 500 tissue papery seeds', '', '', 'Beside Convo hall, Inside H4, Near CSRE bulding, Near Campus hub')";
$res=$conn->query($sql);
echo '1234';
if ($res === TRUE) {
    echo "New record created successfully";
    echo 'hhh';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo 'gjmsx';
}
echo '2';
$conn->close();
       ?>
    </div>

</body>

</html>