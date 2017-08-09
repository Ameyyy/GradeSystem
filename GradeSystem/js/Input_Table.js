
			function deleteRow(row)
		{
			var i=row.parentNode.parentNode.rowIndex;
			document.getElementById('Record').deleteRow(i);
		}


		function insRow()
		{
			var x=document.getElementById('Record');
			   // deep clone the targeted row
			var new_row = x.rows[1].cloneNode(true);
			   // get the total number of rows
			var len = x.rows.length;
			   // set the innerHTML of the first row 
			new_row.cells[0].innerHTML = len;

			   // grab the input from the first cell and update its ID and value
			var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
			inp1.id += len;
			inp1.value = '';

			   // grab the input from the first cell and update its ID and value
			var inp2 = new_row.cells[2].getElementsByTagName('input')[0];
			inp2.id += len;
			inp2.value = '';

			   // append the new row to the table
			x.appendChild( new_row );
		}
		