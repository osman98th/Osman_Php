<?php 
include 'deep.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <style>
     body { 
        font-family: Arial;
         background-color: #f4f7fa; 
         }

    .container { 
        display: flex; 
        justify-content: space-around;
         margin-top: 50px; 
         }
     .form-box, .list-box { background: white; 
     padding: 20px; 
     border-radius: 10px; 
     box-shadow: 0 0 10px rgba(0,0,0,0.1); 
     }
    table { border-collapse: collapse;
     width: 100%;
      }
    th, td { border: 1px solid #ddd; 
    padding: 10px;
     text-align: center; 
     }

     th { background-color: #6a8dff; 
        color: white; 
    }
    h2 { 
        text-align: center; 
    }
     .error {
         color: red; 
         text-align: center;
        }

     input, button { 
        width: 100%; padding: 10px;
         margin: 8px 0; 
        }
     button { 
        background: linear-gradient(to right, #6a8dff, #00c9a7);
         color: white;
          border: none;
           cursor: pointer; 
        }
    </style>
</head>
<body>

<?php if (isset($_GET['notfound'])) echo "<p class='error'>Student Data not found</p>"; ?>

<div class="container">
    <div class="form-box">
        <h2>STUDENT FORM</h2>
        <form action="insert.php" method="POST">
            <label>Student ID:</label>
            <input type="text" name="id" placeholder="Enter Student ID" required>
            
            <label>Student Name:</label>
            <input type="text" name="name" placeholder="Enter Student Name" required>
            
            <label>Student Batch:</label>
            <input type="text" name="batch" placeholder="Enter Student Batch" required>
            
            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="list-box">
        <h2>student List</h2>
        <table>
         <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Batch</th>
        </tr>
    <?php
            $sql = "SELECT * FROM students";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . htmlspecialchars($row["name"]) . "</td>
                            <td>" . htmlspecialchars($row["id"]) . "</td>
                            <td>" . htmlspecialchars($row["batch"]) . "</td>
                          </tr>";
                }
            } else {
                header("Location: index.php?notfound=1");
                exit();
            }
  ?>
        </table>
    </div>
</div>
</body>
</html>