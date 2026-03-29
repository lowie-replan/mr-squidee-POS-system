//=======================================================================
//SETTING ACTIVE BUTTON IN THE SIDEBAR WHEN CLICKED
document.addEventListener("DOMContentLoaded", function () {
    const listItems = document.querySelectorAll("li");

    listItems.forEach((item) => {
        item.addEventListener("click", function () {

            // Remove active class from all items
            listItems.forEach((nav) => nav.classList.remove("active"));
            
            // Add active class to clicked item
            this.classList.add("active");
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".nav-link");

    //Highlighting the active link
    links.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add("active");
        }
    });
});




//=======================================================================
//MODAL FUNCTIONALITIES
document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".item-card");
    const modalMealName = document.getElementById("modalMealName");
    const modalMealImg = document.getElementById("modalMealImg");

    //Get details of every card clicked
    cards.forEach(card => {
        card.addEventListener("click", function () {
            console.log("✅ Card clicked:", card.dataset.name);
            modalMealName.textContent = "You selected " + card.dataset.name;
            modalMealImg.src = card.dataset.img;
        });
    });
});


// document.getElementById('logout').addEventListener('click', function() {
//     var logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'));
//     logoutModal.show();
// });




//=======================================================================
// INCREMENT NUMBER OF ORDERS IN THE TABLE
document.addEventListener("DOMContentLoaded", function () {
    const mealCards = document.querySelectorAll(".item-card");
    const modalMealImg = document.getElementById("modalMealImg");
    const modalMealName = document.getElementById("modalMealName");
    let selectedMealName = "";
    let selectedMealPrice = "";

    // Select dine-in and take-out tables
    const dineInTable = document.querySelector("#dineInTable tbody");
    const takeOutTable = document.querySelector("#takeOutTable tbody");

    // Attach click event to meal cards
    mealCards.forEach(card => {
        card.addEventListener("click", function () {
            selectedMealName = card.getAttribute("data-name");
            selectedMealPrice = card.getAttribute("data-price");

            modalMealImg.src = card.getAttribute("data-img");
            modalMealName.textContent = selectedMealName;
        });
    });

    // Function to add row to table
    function addToTable(table) {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${selectedMealName}</td>
            <td class="addsub text-center">
                <div class="qty-container">
                    <button class="sub" id="sub">-</button>
                    <span>1</span>
                    <button class="add" id="add">+</button>
                </div>
            </td>
            <td class="text-center">Php${selectedMealPrice}</td>
            <td><i class="fas fa-trash delete-icon"></i></td>
        `;

        table.appendChild(row);
        updateTotal();

        // Close the modal after adding item
        const modal = document.getElementById("mealModal");
        const bsModal = bootstrap.Modal.getInstance(modal);
        bsModal.hide();
    }

    // Click event for "Dine In" button
    document.getElementById("dineInBtn").addEventListener("click", function () {
        addToTable(dineInTable);
    });

    // Click event for "Take Out" button
    document.getElementById("takeOutBtn").addEventListener("click", function () {
        addToTable(takeOutTable);
    });
});




//=======================================================================
//UPDATE THE TOTAL AMOUNT
document.addEventListener("click", function (event) {
    // Check if the clicked element is an add (+), subtract (-), or delete (trash icon) button
    if (event.target.classList.contains("add") || event.target.classList.contains("sub") || event.target.classList.contains("delete-icon")) {
        let row = event.target.closest("tr"); // Get the table row
        let qtySpan = row.querySelector(".qty-container span"); // Get the quantity span
        let priceCell = row.querySelector("td:nth-child(3)"); // Get the price column

        let quantity = parseInt(qtySpan.textContent) || 1;
        let price = parseFloat(priceCell.textContent.replace("Php", "")) || 0;

        // If add button is clicked
        if (event.target.classList.contains("add")) {
            quantity++; // Increase quantity
        } 
        // If subtract button is clicked
        else if (event.target.classList.contains("sub")) {
            quantity--; // Decrease quantity
            // If quantity reaches zero, remove the row
            if (quantity < 1) {
                row.remove();
                updateTotal(); // Update total after removing row
                return;
            }
        } 
        // If delete button (trash icon) is clicked
        else if (event.target.classList.contains("delete-icon")) {
            row.remove();
            updateTotal(); // Update total after removing row
            return;
        }

        // Update the quantity in the span
        qtySpan.textContent = quantity;

        // Recalculate the total
        updateTotal();
    }
});

// Function to calculate and update the total price
function updateTotal() {
    let total = 0;

    // Select all price cells in both tables (Dine In & Take Out)
    document.querySelectorAll("#dineInTable tbody tr, #takeOutTable tbody tr").forEach(row => {
        let priceCell = row.querySelector("td:nth-child(3)"); // Get the price column
        let qtyCell = row.querySelector(".qty-container span"); // Get the quantity

        if (priceCell && qtyCell) {
            let price = parseFloat(priceCell.textContent.replace("Php", "")) || 0;
            let qty = parseInt(qtyCell.textContent) || 1;
            total += price * qty;
        }
    });

    // Update the total amount in the UI
    document.getElementById("totalAmount").textContent = `Php${total.toFixed(2)}`;
}




