<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items - Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        input, button {
            padding: 8px;
            margin: 5px;
        }
        .form-container {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Add New Item</h2>
        <label for="item_name">Item Name:</label>
        <input type="text" id="item_name" placeholder="Enter item name"><br>

        <label for="item_price">Price:</label>
        <input type="number" id="item_price" step="0.01" placeholder="Enter item price"><br>

        <label for="item_description">Description:</label>
        <input type="text" id="item_description" placeholder="Enter item description"><br>

        <label for="item_stock">Stock Quantity:</label>
        <input type="number" id="item_stock" placeholder="Enter stock quantity"><br>

        <button onclick="addItem()">Add Item</button>
    </div>

    <h2>Item List</h2>
    <table id="items_table">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Stock Quantity</th>
            </tr>
        </thead>
        <tbody>
            <!-- Items will be dynamically added here -->
        </tbody>
    </table>

    <script>
        function addItem() {
            // Get input values
            const itemName = document.getElementById('item_name').value;
            const itemPrice = document.getElementById('item_price').value;
            const itemDescription = document.getElementById('item_description').value;
            const itemStock = document.getElementById('item_stock').value;

            // Check if all fields are filled
            if (itemName && itemPrice && itemDescription && itemStock) {
                // Create a new row
                const table = document.getElementById('items_table').getElementsByTagName('tbody')[0];
                const newRow = table.insertRow();

                // Insert new cells in the row and add data
                const cell1 = newRow.insertCell(0);
                const cell2 = newRow.insertCell(1);
                const cell3 = newRow.insertCell(2);
                const cell4 = newRow.insertCell(3);

                cell1.textContent = itemName;
                cell2.textContent = itemPrice;
                cell3.textContent = itemDescription;
                cell4.textContent = itemStock;

                // Clear input fields after adding the item
                document.getElementById('item_name').value = '';
                document.getElementById('item_price').value = '';
                document.getElementById('item_description').value = '';
                document.getElementById('item_stock').value = '';
            } else {
                alert('Please fill all fields.');
            }
        }
    </script>

</body>
</html>
