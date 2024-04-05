<?php 
                    if(isset($_GET['search']))
                    {
                    echo'
                        <script>
                        function myFun()
                        {
                            var x=document.getElementById("user-table");
                            if(x.style.display === "none"){
                                x.style.display="block";
                            }
                            else{
                                x.style.display="none";
                            }
                        }
                        </script>
                    ';
                     @include('db.php'); 
                        $filter=$_GET['search'];
                        $query="SELECT * from user WHERE CONCAT(Username,Email,PhoneNumber,Plan,JoinDate) LIKE '%$filter%'";
                        $query_run=mysqli_query($conn,$query);
                        if(mysqli_num_rows($query_run)>0)
                        {
                            echo'
                            <div class="col">
                                <table class="table m-2 table-bordered table-hover align-items-center text-center bg-light rounded shadow-sm table-hover">
                                <thead class="thead-dark">
                                        <tr>
                                            <th scope="col"> User Name </th>
                                            <th scope="col"> Email </th>
                                            <th scope="col"> Phone Number </th>
                                            <th scope="col"> Plan </th>
                                            <th scope="col"> Join of Date </th>
                                        </tr>
                                </thead>
                                <tbody>
                            ';
                            foreach($query_run as $item)
                            {
                                echo'
                                
                                    <tr>
                                        <td> '.$item['Username'].' </td>
                                        <td> '.$item['Email'].' </td>
                                        <td> '.$item['PhoneNumber'].' </td>
                                        <td> '.$item['Plan'].' </td>
                                        <td> '.$item['JoinDate'].' </td>
                                    </tr>
                                ';
                            }
                            echo '
                            </tbody>
                            </table>
                            </div>
                            ';
                        }
                        else
                        {
                            echo'  
                            <tbody>
                                <tr> <td colspan="6"> No Records Found </td> </tr>
                            </tbody>
                            </table>
                            </div>
                            ';
                        }
                    }
                    ?>