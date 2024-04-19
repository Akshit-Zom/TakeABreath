<?php
require 'db/db_config.php'; 

echo '<section id="div-add-service" class="add-service-section">
            <div class="container">
                <h1>Add Service</h1>
          
                </br>
                 <form action="submit_service.php" method="post">

                 <label for="provider_name">Name:</label>
                 <input id="provider_name" name="provider_name" required></input>
                 <label for="provider_contact">Contact Number:</label>
                 <input id="provider_contact" name="provider_contact" required></input>
                 <label for="provider_email">Email:</label>
                 <input id="provider_email" name="provider_email" required></input>
                    <label for="service_category">Category:</label>
                    <input id="service_category" name="service_category" required></input>
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4" required></textarea>
                    <label for="hourly_rate">Hourly Rate:</label>
                    <input id="hourly_rate" name="hourly_rate" required></input>
                    <label for="city">City:</label>
                    <input id="city" name="city" required></input>
                    <label for="availability">Availability:</label>
                    <input id="availability" name="availability" required></input>

                    <button type="submit">Submit Service</button>
                </form>
                </br>
                </br>
            
            </div>
        </section>';
?>