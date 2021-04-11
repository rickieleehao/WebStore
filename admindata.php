<?php

include_once "configdb.php";

if (!isset($_GET['filter'])) {
    if (isset($_GET['category'])) {
        $category = $_GET['category'];
        if ($category == "product") {
            editProduct($conn);
        } else if ($category == "FAQ") {
            editFAQ($conn);
        } else if ($category == "newFAQ") {
            addFAQ();
        } else if ($category == "newproduct") {
            addProduct($conn);
        }
    } else {
        defaultProduct($conn);
    }
} else if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];

    if ($filter == "product") {
        defaultProduct($conn);
    } else if ($filter == "FAQ") {
        defaultFAQ($conn);
    }
}

function editProduct($conn)
{
    $id = $_GET['id'];

    $query = "SELECT * FROM shoes_data WHERE id = '$id'";

    if ($result = mysqli_query($conn, $query)) {
        while ($obj = mysqli_fetch_object($result)) {
            echo <<<HTML
                <form action="admindataedit.php" method="POST">
                    <div class="container">
                        <label>Product ID:</label><br>
                        <input type="text" name="id" value="$obj->id" readonly>
                    </div>
                    <div class="container">
                        <label>Name</label><br>
                        <input type="text" value = "$obj->name" name="name">
                    </div>
                    <div class="container">
                        <label>Category</label><br>
                        <select name = "category">
                        <option value="Men">Men</option>
                        <option value="Woman">Woman</option>
                        </select>
                    </div>
                    <div class="container">
                        <label>Sub-Category</label><br>
                        <select name = "sub">
                        <option value="Lifestyle">Lifestyle</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Running">Running</option>
                        <option value="Basketball">Basketball</option>
                        <option value="Football">Football</option>
                        </select>
                    </div>
                    
                    <div class="container">
                        <label>Price (RM)</label><br>
                        <input type="number" value = "$obj->price" name="price">
                    </div>
                    <div class="container">
                        <label>Year</label><br>
                        <input type="number" value = "$obj->year" name="year">
                    </div>
                    <div class="container">
                        <label>Promotion Rate</label><br>
                        <input type="number" value = "$obj->promotion_rate" name="p_rate">
                    </div>
                    <div class="container">
                        <label>Color Description</label><br>
                        <textarea name="c_description" class="small">$obj->color_description</textarea>
                    </div>
                    <div class="container">
                        <label>Product Description</label><br>
                        <textarea name="p_description" class="big">$obj->product_description</textarea>
                    </div>
                    <div class="container btn">
                    <button type="submit" name="submit" class="button">Update</button>
                    </div>
                </form>
            HTML;
        }
    }
}

function editFAQ($conn)
{
    $fid = $_GET['fid'];

    $query = "SELECT * FROM faq WHERE fid = '$fid'";


    if ($result = mysqli_query($conn, $query)) {
        while ($obj = mysqli_fetch_object($result)) {
            echo <<<HTML
                <form action="admindataedit.php" method="POST">
                    <input type="hidden" value="$obj->fid" name="fid">
                    <div class="container">
                        <label>Question</label><br>
                        <textarea name="question" class="small">$obj->question</textarea>
                    </div>
                    <div class="container">
                        <label>Answer</label><br>
                        <textarea name="answer" class="big">$obj->answer</textarea>
                    </div>
                    <div class="container btn">
                    <button type="submit" name="submit" class="button">Update</button>
                    </div>
                </form>
            HTML;
        }
    }
}

function defaultProduct($conn)
{
    $query = "SELECT * FROM shoes_data";
    echo <<<HTML
        <a href="admin.php?category=newproduct">
            <div class="flexbox">
                <i class='fas fa-plus-circle' style='font-size: 30px'></i>
                <span>Add New Entry</span>
            </div>
        </a>
    HTML;
    echo <<<HTML
        <table>
        <tr>
            <th>SHOE ID</th>
            <th>CATEGORY</th>
            <th>NAME</th>
            <th class="icon-button">EDIT</th>
            <th class="icon-button">DELETE</th>
        </tr>
        HTML;
    if ($result = mysqli_query($conn, $query)) {
        while ($obj = mysqli_fetch_object($result)) {
            echo <<<HTML
            <tr>
                <td>$obj->id</td>
                <td>$obj->category</td>
                <td>$obj->name</td>
                <td><a href=admin.php?category=product&id=$obj->id><i class="fas fa-edit"></i></a></td>
                <td><a href=admindatadelete.php?category=product&id=$obj->id><i class="fas fa-trash-alt"></i></a></td>
            </tr>
            HTML;
        }
    }
    echo "</table>";
}

function defaultFAQ($conn)
{
    $query = "SELECT * FROM faq";
    echo <<<HTML
        <a href="admin.php?category=newFAQ">
            <div class="flexbox">
                <i class='fas fa-plus-circle' style='font-size: 30px'></i>
                <span>Add New Entry</span>
            </div>
        </a>
    HTML;
    echo <<<HTML
        <table>
        <tr>
            <th>FAQ ID</th>
            <th>QUESTION</th>
            <th class="icon-button">EDIT</th>
            <th class="icon-button">DELETE</th>
        </tr>
        HTML;
    if ($result = mysqli_query($conn, $query)) {
        while ($obj = mysqli_fetch_object($result)) {
            echo <<<HTML
            <tr>
                <td>$obj->fid</td>
                <td>$obj->question</td>
                <td><a href=admin.php?category=FAQ&fid=$obj->fid><i class="fas fa-edit"></i></a></td>
                <td><a href=admindatadelete.php?category=FAQ&fid=$obj->fid><i class="fas fa-trash-alt"></i></a></td>
            <tr>
            HTML;
        }
    }
    echo "</table>";
}

function addFAQ()
{
    echo <<<HTML
    <form action='admindatacreate.php' method="POST">
        <input type="hidden" name="fid">
        <div class="container">
            <label>Question</label><br>
            <textarea name="question" class="small" required></textarea>
        </div>
        <div class="container">
            <label>Answer</label><br>
            <textarea name="answer" class="big" required></textarea>
        </div>
            <div class="container btn">
            <button type="submit" name="submit" class="button">Create</button>
        </div>
    </form>
    HTML;
}



function addProduct($conn)
{

    $query = "SELECT id FROM shoes_data";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $counter = 1;

        while ($obj = $result->fetch_object()) {
            if (strstr($obj->id, strval($counter))) {
                $counter++;
            } else {
                break;
            }
        }

        $counter = strval($counter);

        if (strlen($counter) == 1) {
            $counter = "00" . $counter;
        } else if (strlen($counter) == 2) {
            $counter = "0" . $counter;
        }

        $id = "S" . $counter;
    } else {
        $id = "S001";
    }

    echo <<<HTML
                <form action="admindatacreate.php" method="POST">
                    <div class="container">
                        <label>Product ID: </label><br>
                        <input type="text" name="id" value="$id" readonly>
                    </div>
                    <div class="container">
                        <label>Name</label><br>
                        <input type="text" name="name">
                    </div>
                    <div class="container">
                        <label>Category</label><br>
                        <select name = "category">
                        <option value="Men">Men</option>
                        <option value="Woman">Woman</option>
                        <option value="Kids">Kids</option>
                        </select>
                    </div>
                    <div class="container">
                        <label>Sub-Category</label><br>
                        <select name = "sub">
                        <option value="Lifestyle">Lifestyle</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Running">Running</option>
                        <option value="Basketball">Basketball</option>
                        <option value="Football">Football</option>
                        </select>
                    </div>
                    
                    <div class="container">
                        <label>Price (RM)</label><br>
                        <input type="number" name="price">
                    </div>
                    <div class="container">
                        <label>Year</label><br>
                        <input type="number" name="year">
                    </div>
                    <div class="container">
                        <label>Promotion Rate</label><br>
                        <input type="number" name="p_rate">
                    </div>
                    <div class="container">
                        <label>Color Description</label><br>
                        <textarea name="c_description" class="small"></textarea>
                    </div>
                    <div class="container">
                        <label>Product Description</label><br>
                        <textarea name="p_description" class="big"></textarea>
                    </div>
                    <div class="container btn">
                    <button type="submit" name="submit" class="button">Update</button>
                    </div>
                </form>
            HTML;
}
mysqli_close($conn);
