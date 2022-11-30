<?php
$title = "CSS Grid Generator";
$description = "Generate and export a custom CSS Grid Layout";
?>

<?php include_once("../_inc/header.php"); ?>

<link rel="stylesheet" href="/css-grid/grid.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.1.0/styles/default.min.css">
<link rel="stylesheet" href="/css-grid/highlight.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.1.0/highlight.min.js"></script>

<div class="wrapper" id="css-grid">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="beta">Beta</div>
			
			<div class="row">
				<div class="tiny-12">
					<h1 class="headline center">CSS Grid Generator</h1>
					<h2 class="small center">Generate and export a custom CSS Grid Layout.</h2>
					<hr>
				</div>
				<div class="tiny-12 small-6">
					<p><strong>grid-template-rows:</strong></p>
					<input class="grid-input-text" type="text" id="grid-template-rows" value="1fr 1fr 1fr">
					<button class="grid-input-button" id="remove-row">-</button>
					<button class="grid-input-button" id="add-row">+</button>
					<small>Example: <code style="padding: 0.1rem 0.35rem;border-radius: 0.20rem;">1fr, 20px, 10%, auto, repeat(2, 100px), minmax(20px, auto)</code></small>
					<br><br>
				</div>
				<div class="tiny-12 small-6">
					<p><strong>grid-template-columns:</strong></p>
					<input class="grid-input-text" type="text" id="grid-template-columns" value="1fr 1fr 1fr 1fr 1fr">
					<button class="grid-input-button" id="remove-column">-</button>
					<button class="grid-input-button" id="add-column">+</button>
					<small>Example: <code style="padding: 0.1rem 0.35rem;border-radius: 0.20rem;">1fr, 20px, 10%, auto, repeat(2, 100px), minmax(20px, auto)</code></small>
					<br><br>
				</div>
				<div class="tiny-12 small-6">
					<strong><label for="gridGap" style="display: inline-block;">Grid Gap:</label></strong><br>
					<input style="border-radius: 0.2rem;margin: 0 0.1rem 0 0;" type="number" min="0" max="64" value="4" id="gridGap">
					<div class="select" style="border-radius: 0.2rem; margin: 0 0.5rem 0 0; padding: 0; display: inline-block; width: 70px;">
						<select style="padding: 0.37rem .5rem;" title="Select gap unit" name="grid-gap-unit" id="gridGapUnit">
							<option value="px">px</option>
							<option value="rem">rem</option>
							<option value="em">em</option>
							<option value="%">%</option>
							<option value="cm">cm</option>
							<option value="mm">mm</option>
							<option value="vmin">vmin</option>
							<option value="vmax">vmax</option>
						</select>
						<!-- <span class="focus"></span> -->
					</div>
					<input type="range" min="0" max="64" value="0" id="gridGapRange">
					<br><br>
				</div>
				<!-- <div class="tiny-12 small-6">
					<p><strong>grid-template-columns:</strong></p>
					<input class="grid-input-text" type="text" id="grid-template-columns" value="1fr 1fr 1fr 1fr 1fr">
				</div> -->
			</div>
			
			<div class="row">	
				<div class="tiny-12">
					<div class="wb-grid" id="grid" style="">
						<!-- <div class="wb-grid-cell" style="--grid-column-start:1; --grid-column-end:2; --grid-row-start:1; --grid-row-end:2"><button class="add-item">+</button></div>
						<div class="wb-grid-cell" style="--grid-column-start:2; --grid-column-end:3; --grid-row-start:1; --grid-row-end:2"><button class="add-item">+</button></div>
						<div class="wb-grid-cell" style="--grid-column-start:3; --grid-column-end:4; --grid-row-start:1; --grid-row-end:2"><button class="add-item">+</button></div>
						<div class="wb-grid-cell" style="--grid-column-start:4; --grid-column-end:5; --grid-row-start:1; --grid-row-end:2"><button class="add-item">+</button></div>
						<div class="wb-grid-cell" style="--grid-column-start:5; --grid-column-end:6; --grid-row-start:1; --grid-row-end:2"><button class="add-item">+</button></div>
						
						<div class="wb-grid-cell" style="--grid-column-start:1; --grid-column-end:2; --grid-row-start:2; --grid-row-end:3"><button class="add-item">+</button></div>
						<div class="wb-grid-cell" style="--grid-column-start:2; --grid-column-end:3; --grid-row-start:2; --grid-row-end:3"><button class="add-item">+</button></div>
						<div class="wb-grid-cell" style="--grid-column-start:3; --grid-column-end:4; --grid-row-start:2; --grid-row-end:3"><button class="add-item">+</button></div>
						<div class="wb-grid-cell" style="--grid-column-start:4; --grid-column-end:5; --grid-row-start:2; --grid-row-end:3"><button class="add-item">+</button></div>
						<div class="wb-grid-cell" style="--grid-column-start:5; --grid-column-end:6; --grid-row-start:2; --grid-row-end:3"><button class="add-item">+</button></div>
						
						<div class="wb-grid-cell" style="--grid-column-start:1; --grid-column-end:2; --grid-row-start:3; --grid-row-end:4"><button class="add-item">+</button></div>
						<div class="wb-grid-cell" style="--grid-column-start:2; --grid-column-end:3; --grid-row-start:3; --grid-row-end:4"><button class="add-item">+</button></div>
						<div class="wb-grid-cell" style="--grid-column-start:3; --grid-column-end:4; --grid-row-start:3; --grid-row-end:4"><button class="add-item">+</button></div>
						<div class="wb-grid-cell" style="--grid-column-start:4; --grid-column-end:5; --grid-row-start:3; --grid-row-end:4"><button class="add-item">+</button></div>
						<div class="wb-grid-cell" style="--grid-column-start:5; --grid-column-end:6; --grid-row-start:3; --grid-row-end:4"><button class="add-item">+</button></div>
					</div> -->
				</div>
			</div>
			
		</section>
		
		<section class="content_block">
			<div class="row">
				<div class="tiny-12 small-6">
					<p><strong>HTML:</strong></p>
					<pre contenteditable="true"><code class="language-html" id="gridhtml"></code></pre>
				</div>
				<div class="tiny-12 small-6">
					<p><strong>CSS:</strong></p>
					<pre contenteditable="true"><code class="language-css" id="gridcss"></code></pre>
				</div>
			</div>
		</section>
		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
	
</div>

<script>

	// Split string into array
	function stringToArray(string) {
		const a = string.split(" ");
		return a;
	}
	
	// Sync grid number and slider
	function syncGridGapNumbers(e) {
		const value = e.target.value;
		gridGap.value = value;
		gridGapRange.value = value;
	}
	
	// Create Move button
	function newMoveButton(position, direction) {
		const button = document.createElement('button');
		button.classList.add('move');
		button.classList.add(position);
		button.setAttribute("onclick", "resizeGridItem(this)");
		button.classList.add('move-'+direction);
		if(direction == "right") {
			direction = '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z"/></svg>';
		}
		if(direction == "left") {
			direction = '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12l4.58-4.59z"/></svg>';
		}
		if(direction == "up") {
			direction = '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14l-6-6z"/></svg>';
		}
		if(direction == "down") {
			direction = '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"/><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/></svg>';
		}
		button.innerHTML = direction;
		return button;
	}
	
	// Get grid container and inputs
	const gridContainer = document.getElementById('grid'),
		  gridCSS = document.getElementById('gridcss'),
		  gridHTML = document.getElementById('gridhtml'),
		  gridTemplateRows = document.getElementById('grid-template-rows'),
		  gridTemplateColumns = document.getElementById('grid-template-columns')
		  addRow = document.getElementById('add-row'),
		  removeRow = document.getElementById('remove-row'),
		  addColumn = document.getElementById('add-column'),
		  removeColumn = document.getElementById('remove-column'),
		  gridGap = document.getElementById("gridGap"),
		  gridGapRange = document.getElementById("gridGapRange");
		  gridGapUnit = document.getElementById("gridGapUnit");
	let gridParentCSS = [];
		  
	// Create grid
	function createGrid() {
		//gridContainer.innerHTML = "";
		let newGridItem,
			newGridItemButton,
			gridRowArray = [],
			gridColumnArray = [],
			gridX = 1,
			gridY = 1;
		const numberOfRows = stringToArray(gridTemplateRows.value).length,
			  numberOfColumns = stringToArray(gridTemplateColumns.value).length,
			  totalGridItems = numberOfRows*numberOfColumns;
		
		// Create array with grid item positions
		for (let i = 0; i < totalGridItems; i++) {
			gridRowArray.push(gridY);
			gridColumnArray.push(gridX);
			if (gridY >= numberOfRows) {
				gridY = 1;
			} else {
				gridY++;
			}
			if (gridX >= numberOfColumns) {
				gridX = 1;
			} else {
				gridX++;
			}
		}	
		
		// Create elements
		for (let i = 0; i < totalGridItems; i++) {
			
			// Create Grid item
			newGridItem = document.createElement('div');
			newGridItem.classList.add('wb-grid-cell');
			newGridItem.style.gridRowStart = gridRowArray.sort()[i];
			newGridItem.style.gridRowEnd = gridRowArray.sort()[i]+1;
			newGridItem.style.gridColumnStart = gridColumnArray[i];
			newGridItem.style.gridColumnEnd = gridColumnArray[i]+1;
			
			// Create Grid item button
			newGridItemButton = document.createElement('button');
			newGridItemButton.innerHTML = "+";
			newGridItemButton.setAttribute('onclick', 'createGridItem(this)');
			
			// Append new elements 
			newGridItem.appendChild(newGridItemButton);
			gridContainer.appendChild(newGridItem);
			if (gridGap.value > 0) {
				gridContainer.classList.add('gap');
				newGridItem.classList.add('gap');
			} else {
				gridContainer.classList.remove('gap');
				newGridItem.classList.remove('gap');
			}
		}
		
		// Update grid parent
		gridContainer.style.display = "grid";
		gridContainer.style.gridTemplateRows = gridTemplateRows.value;
		gridContainer.style.gridTemplateColumns = gridTemplateColumns.value;
		gridContainer.style.gridGap = gridGap.value+gridGapUnit.value;
		
		// Add grid parent CSS to array
		gridParentCSS = [];
		gridParentCSS.push("display: grid");
		gridParentCSS.push("height: 100%");
		gridParentCSS.push("grid-gap: "+gridGap.value+gridGapUnit.value);
		gridParentCSS.push("grid-template-rows: "+gridTemplateRows.value);
		gridParentCSS.push("grid-template-columns: "+gridTemplateColumns.value);
		
		
		
		// Print CSS
		gridCSS.innerHTML = "";
		gridCSS.innerHTML += "#grid {\n";
		gridCSS.innerHTML += "   "+gridParentCSS[0]+";\n";
		gridCSS.innerHTML += "   "+gridParentCSS[1]+";\n";
		gridCSS.innerHTML += "   "+gridParentCSS[2]+";\n";
		gridCSS.innerHTML += "   "+gridParentCSS[3]+";\n";
		gridCSS.innerHTML += "   "+gridParentCSS[4]+";\n";
		gridCSS.innerHTML += "}\n";
		
		let gridChildren = document.querySelectorAll('[data-id]');
		for (let h = 0; h < gridChildren.length; h++) {
			gridCSS.innerHTML += "#"+gridChildren[h].dataset.id+" {\n";
			gridCSS.innerHTML += "   grid-area: "+gridChildren[h].style.gridArea+";\n";
			gridCSS.innerHTML += "}\n";
		}
		
		// Print HTML
		gridHTML.innerHTML = "";
		gridHTML.innerHTML += "&lt;div id=\"grid\"&gt;\n";
		for (let h = 0; h < gridChildren.length; h++) {
			gridHTML.innerHTML += "   &lt;div id=\""+gridChildren[h].dataset.id+"\"&gt;&lt;/div&gt;\n";
		}
		gridHTML.innerHTML += "&lt;/div&gt;";
		
		hljs.highlightAll();
	}
	
	// Create grid item
	function createGridItem(e) {
		// Add background color and positioning syles
		const colors = ["pink-1", "pink-2", "purple-1", "purple-1-2", "purple-2", "purple-3", "purple-4", "blue-1", "blue-2", "green-1", "green-2", "green-3", "green-4", "yellow-1"];
		const random = Math.floor(Math.random() * colors.length);		
		e.parentElement.style.background = "var(--color-"+colors[random]+")";
		e.parentElement.style.position = "relative";
		//e.parentElement.style.zIndex = "99";
		
		// Add unique identifier
		const id = Math.random().toString(36).substring(7);
		const origin = e.parentElement.style.gridArea;
		e.parentElement.setAttribute("data-id", id);
		e.parentElement.setAttribute("data-origin", origin);
		
		// Add delete button
		let deleteGridItemButton = document.createElement('button');
		deleteGridItemButton.innerHTML = "✕";
		deleteGridItemButton.classList.add('grid-delete-item-button');
		deleteGridItemButton.setAttribute('onclick', 'deleteGridItem(this)');
		e.parentElement.appendChild(deleteGridItemButton);
		
		// Get current grid position
		const maxRow = stringToArray(gridTemplateRows.value).length;
		const maxCol = stringToArray(gridTemplateColumns.value).length;
		const colStart = window.getComputedStyle(e.parentElement, null).getPropertyValue("grid-column-start");
		const colEnd = window.getComputedStyle(e.parentElement, null).getPropertyValue("grid-column-end");
		const rowStart = window.getComputedStyle(e.parentElement, null).getPropertyValue("grid-row-start");
		const rowEnd = window.getComputedStyle(e.parentElement, null).getPropertyValue("grid-row-end");
		//console.log(rowStart, colStart, rowEnd, colEnd);

		// Add move buttons
		if (colStart < maxCol) {
			e.parentElement.appendChild(newMoveButton('right', 'right'));
		}
		if (colStart > 1) {
			e.parentElement.appendChild(newMoveButton('left', 'left'));
		}
		if (colStart == maxCol && (colEnd-colStart) > 1) {
			e.parentElement.appendChild(newMoveButton('right', 'left'));
		}
		if (colStart == 1 && (colEnd-colStart) > 1) {
			e.parentElement.appendChild(newMoveButton('left', 'right'));
		}
		if (colStart == 1 && (colEnd-colStart) >= 2) {
			e.parentElement.appendChild(newMoveButton('left', 'right'));
		}
		
		if (rowStart < maxRow) {
			e.parentElement.appendChild(newMoveButton('down', 'down'));
		}
		if (rowStart > 1) {
			e.parentElement.appendChild(newMoveButton('up', 'up'));
		}
		if (rowStart == maxRow && (rowEnd-rowStart) > 1) {
			e.parentElement.appendChild(newMoveButton('down', 'up'));
		}
		if (rowStart == 1 && (rowEnd-rowStart) > 1) {
			e.parentElement.appendChild(newMoveButton('up', 'down'));
		}
		
		// Remove add button
		e.remove();
		createGrid(); 
	}
	
	// Grid controls
	gridTemplateRows.addEventListener('change', function() { 
		createGrid();
	});
	gridTemplateColumns.addEventListener('change', function() {
		createGrid(); 
	});
	addRow.addEventListener('click', function() {
		//console.log(gridTemplateRows.value);
		gridTemplateRows.value = gridTemplateRows.value + " 1fr";
		createGrid();
	});
	removeRow.addEventListener('click', function() {
		let newRow = stringToArray(gridTemplateRows.value);
		newRow.pop();
		gridTemplateRows.value = newRow.join(' ');
		createGrid();
	});
	addColumn.addEventListener('click', function() {
		gridTemplateColumns.value = gridTemplateColumns.value + " 1fr";
		createGrid();
	});
	removeColumn.addEventListener('click', function() {
		let newColumn = stringToArray(gridTemplateColumns.value);
		newColumn.pop();
		gridTemplateColumns.value = newColumn.join(' ');
		createGrid();	
	});
	gridGap.addEventListener('input', function(e) {
		syncGridGapNumbers(e);
		createGrid();
	});
	gridGapRange.addEventListener('input', function(e) {
		syncGridGapNumbers(e);
		createGrid();
	});
	gridGapUnit.addEventListener('input', function() {
		createGrid();
	});
	
	
	// Grid Item Control
	function resizeGridItem(e) {
		// const maxRow = stringToArray(gridTemplateRows.value).length;
		// const maxCol = stringToArray(gridTemplateColumns.value).length;
		const colStart = window.getComputedStyle(e.parentElement, null).getPropertyValue("grid-column-start");
		const colEnd = window.getComputedStyle(e.parentElement, null).getPropertyValue("grid-column-end");
		const rowStart = window.getComputedStyle(e.parentElement, null).getPropertyValue("grid-row-start");
		const rowEnd = window.getComputedStyle(e.parentElement, null).getPropertyValue("grid-row-end");
		//console.log(rowStart, colStart, rowEnd, colEnd);
		
		if(e.classList.contains('move-left')) {
			e.parentElement.style.gridColumnStart = parseInt(colStart)-1;
		}
		if(e.classList.contains('move-right')) {
			e.parentElement.style.gridColumnEnd = parseInt(colEnd)+1;
		}
		if(e.classList.contains('move-up')) {
			e.parentElement.style.gridRowStart = parseInt(rowStart)-1;
		}
		if(e.classList.contains('move-down')) {
			e.parentElement.style.gridRowEnd = parseInt(rowEnd)+1;
		}
		createGrid();
	}
	
	
	// Remove grid item
	function deleteGridItem(e) {
		const parent = e.parentElement;
		let newGridItemButton = document.createElement('button');
		newGridItemButton.innerHTML = "+";
		newGridItemButton.setAttribute('onclick', 'createGridItem(this)');
		parent.innerHTML = "";
		parent.style.background = '';
		parent.style.position = '';
		parent.style.zIndex = '';
		parent.style.gridArea = parent.dataset.origin;
		parent.removeAttribute('data-origin');
		parent.removeAttribute('data-id');
		parent.appendChild(newGridItemButton);
		createGrid();
	}
	
	// Initialise Grid
	createGrid();
</script>

<?php include_once("../_inc/footer.php"); ?>





