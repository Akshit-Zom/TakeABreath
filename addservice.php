<?php
require 'db/db_config.php'; 

echo '<section id="div-add-service" class="add-service-section">
            <div class="container">
                <h1>Add Service</h1>
          
                </br>
                 <form action="submit_service.php" method="post">

                 <label for="servicename">Service Name:</label>
                 <input id="servicename" name="servicename" required></input>
                 <label for="description">Description:</label>
                 <textarea id="description" name="description" rows="4" required></textarea>
                 <label for="price">Price:</label>
                 <input id="price" name="price" required></input>

                    <button type="submit">Submit Service</button>
                </form>
                </br>
                </br>
            
            </div>
        </section>';
?>
