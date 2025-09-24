<?php
// Data menu (contoh statis, bisa ambil dari DB)
$menu = [
    "Monday" => ["name" => "Grilled Chicken Salad", "desc" => "Fresh greens with grilled chicken breast", "price" => 8.5],
    "Tuesday" => ["name" => "Beef Stir Fry", "desc" => "Tender beef with vegetables and rice", "price" => 9],
    "Wednesday" => ["name" => "Fish and Chips", "desc" => "Crispy fish fillet with golden fries", "price" => 10],
    "Thursday" => ["name" => "Vegetarian Pasta", "desc" => "Creamy pasta with seasonal vegetables", "price" => 7.5],
    "Friday" => ["name" => "BBQ Pork Ribs", "desc" => "Slow-cooked ribs with coleslaw", "price" => 11],
    "Saturday" => ["name" => "Salmon Teriyaki", "desc" => "Glazed salmon with steamed vegetables", "price" => 12],
    "Sunday" => ["name" => "Roast Beef", "desc" => "Sunday roast with all the trimmings", "price" => 10.5],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body class="sb-nav-fixed">
  <!-- Sidebar Toggle Button -->

  @include('partials.navbar')
  <div id="layoutSidenav">
    @include('partials.sidebar')
    <div id="layoutSidenav_content">

<div class="container-fluid px-4">
  <div class="tab-content">
    <!-- 🔹 Order Menu Tab -->
    <div class="tab-pane fade show active" id="order" role="tabpanel">
      
      <!-- Select Week & Year -->
      <div class="row mb-4">
        <div class="col-md-6 col-12 mb-2">
          <label for="week" class="form-label">Select Week</label>
          <select id="week" class="form-select">
            <?php for ($i=1; $i<=52; $i++): ?>
              <option value="<?= $i ?>">Week <?= $i ?></option>
            <?php endfor; ?>
          </select>
        </div>
        <div class="col-md-6 col-12">
          <label for="year" class="form-label">Select Year</label>
          <select id="year" class="form-select">
            <?php for ($y=date("Y"); $y<=date("Y")+2; $y++): ?>
              <option value="<?= $y ?>"><?= $y ?></option>
            <?php endfor; ?>
          </select>
        </div>
      </div>

      <form id="orderForm" method="POST" action="save.php">
        <div class="row g-3">
          @foreach ($menu as $day => $item)
            <div class="col-12 col-sm-6 col-md-4 mb-3 d-flex align-items-stretch">
              <div class="card day-card w-100 h-100" data-day="{{ $day }}" data-price="{{ $item['price'] }}">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div>
                    <h5 class="card-title">{{ $day }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $item['name'] }}</h6>
                    <p class="card-text small">{{ $item['desc'] }}</p>
                  </div>
                  <div>
                    <p class="price">${{ $item['price'] }}</p>
                    <input type="checkbox" name="days[]" value="{{ $day }}" class="form-check-input d-none">
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <!-- Summary -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-4 gap-2">
          <div>
            <span id="countDays" class="badge bg-warning text-dark">0 days selected</span>
            <span id="totalPrice" class="badge bg-success">Total: $0.00</span>
          </div>
          <button type="submit" class="btn btn-primary">Save Order</button>
        </div>
      </form>
    </div>

    <!-- 🔹 History Tab -->
    <div class="tab-pane fade" id="history" role="tabpanel">
      <h5>History</h5>
      <p>Past orders will be displayed here...</p>
    </div>

    <!-- 🔹 Menu Tab -->
    <div class="tab-pane fade" id="menu" role="tabpanel">
      <h5>Weekly Menu</h5>
      <ul>
        <?php foreach ($menu as $day => $item): ?>
          <li><strong><?= $day ?>:</strong> <?= $item['name'] ?> - $<?= $item['price'] ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <!-- 🔹 Question Tab -->
    <div class="tab-pane fade" id="question" role="tabpanel">
      <h5>Have a Question?</h5>
      <form>
        <textarea class="form-control mb-2" rows="3" placeholder="Type your question..."></textarea>
        <button class="btn btn-secondary">Submit</button>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll(".day-card");
    const countDays = document.getElementById("countDays");
    const totalPrice = document.getElementById("totalPrice");

    function updateSummary() {
        let selected = document.querySelectorAll(".day-card.selected");
        let count = selected.length;
        let total = 0;
        selected.forEach(c => total += parseFloat(c.dataset.price));

        countDays.textContent = `${count} days selected`;
        totalPrice.textContent = `Total: $${total.toFixed(2)}`;
    }

    cards.forEach(card => {
        card.addEventListener("click", function() {
            this.classList.toggle("selected");
            let checkbox = this.querySelector("input[type=checkbox]");
            checkbox.checked = !checkbox.checked;
            updateSummary();
        });
    });

    updateSummary();
});
</script>
</body>
</html>
