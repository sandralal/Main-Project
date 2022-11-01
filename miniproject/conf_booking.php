<div class="popup" id="popup">
            <img src="tick.png">
            <h2>Thank You .</h2>
            <p>Your booking details have been submitted.</br>
            Total Price:<?php echo $price;?></p> 
            <button type="button" onclick="closePopup()">OK</button>

        </div>
     </button>
     </form>
    <script>
        let popup = document.getElementById("popup");
        let p=document.getElementById("body");
        
        function openPopup(){
          p.classList.add("close");
        popup.classList.add("open-popup");
        
       
      }
        function closePopup(){
        popup.classList.remove("open-popup");
        location.replace("dashboard.php")
        }
       
        </script>
       