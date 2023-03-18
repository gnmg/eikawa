<!DOCTYPE html>
<html>
  <head>
    <style>
      /* Define the styles for the table and cells */
      .table {
        display: table;
        border-collapse: collapse;
        width: 100%;
      }
      .row {
        display: table-row;
      }
      .cell {
        display: table-cell;
        padding: 10px;
        border: 1px solid black;
      }
      .left-column {
        background-color: yellow;
        border-left: 1px solid black;
      }

      /* Define the styles for responsive layout */
      @media (max-width: 768px) {
        .table {
          display: block;
          width: 100%;
        }
        .row {
          display: block;
          margin-bottom: 10px;
        }
        .cell {
          display: block;
          width: 100%;
          border: none;
          border-bottom: 1px solid black;
          text-align: center;
        }
        .left-column {
          border: none;
        }
      }
    </style>
  </head>
  <body>
    <div class="table">
      <div class="row">
        <div class="cell left-column">Row 1, Column 1</div>
        <div class="cell">Row 1, Column 2</div>
      </div>
      <div class="row">
        <div class="cell left-column">Row 2, Column 1</div>
        <div class="cell">Row 2, Column 2</div>
      </div>
      <div class="row">
        <div class="cell left-column">Row 3, Column 1</div>
        <div class="cell">Row 3, Column 2</div>
      </div>
      <div class="row">
        <div class="cell left-column">Row 4, Column 1</div>
        <div class="cell">Row 4, Column 2</div>
      </div>
      <div class="row">
        <div class="cell left-column">Row 5, Column 1</div>
        <div class="cell">Row 5, Column 2</div>
      </div>
    </div>
  </body>
</html>
