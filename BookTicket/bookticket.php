<html>
    <head>
    </head>
    <body>
        <h2>Select the seat</h2>
        <div id="table_area"></div>
        <div id="users" style="visibility:hidden">
            <h2>Enter Your Details:</h2>
            <form method="post" name="infoform" id="infoform" action="bookticket_form.php">
                <label for="name">Name:</label>
                <input type="text" name="user_name" id="user_name"/><br/>
                <label for="email">Email Id:</label>
                <input type="email" name="email" id="email"/><br/>
                <label for="mobile">Mobile Number:</label>
                <input type="text" name="mobile" id="mobile"/><br/>
                <label for="seat">Number of seats:</label>
                <select name="seat">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select><br/>
                <button type="submit" id="submit">Submit</button>

            </form>
        </div>
        <script>
            let table = document.createElement('table'), tr, td, row, cell, seats;
            function bookTicket() {
                if (this.getAttribute("class")=== "unbooked"){
                    this.style.border= "1px solid blue";
                    this.style.backgroundColor = "blue";
                   this.setAttribute("class","booked");
                } else {
                    this.style.border = "1px solid black";
                    this.style.backgroundColor = "white";
                    this.setAttribute("class","unbooked");
                }
                seats =document.querySelectorAll('.booked').length;
                   if (seats >= 1) {
                   document.getElementById("users").style.visibility="visible";
                   } else {
                    document.getElementById("users").style.visibility="hidden";
                   }
            }
            for (row = 0; row < 10; row++) {
                tr = document.createElement('tr');
                for (cell = 0; cell < 30; cell++) {
                    td = document.createElement('td');
                    tr.appendChild(td);
                    td.setAttribute("class","unbooked");
                    td.style.border = "1px solid black";
                    td.style.width = "30px";
                    td.style.height = "30px";
                    td.addEventListener("click",bookTicket);
                }
                table.appendChild(tr);
            }
            document.getElementById('table_area').appendChild(table);
        </script>
    </body>
</html>