google.load('visualization', '1.0');  // Note: No need to specify chart libraries.
	var SpreadsheetURL = "https://spreadsheets.google.com/tq?tqx=out:html&key=1nVRQBkIm8nEAeIpnYiLKJVJ9mW0-ARxxMhN_5S9jT60&gid=364023335";

	function drawVisualization() {

// FELURIAN
		google.visualization.drawChart( {
			"containerId": "Felurian_NA",
			"dataSourceUrl": SpreadsheetURL,
			"query":"SELECT D, F, G, H, I, J, K, L, M WHERE B CONTAINS 'Felurian' AND L CONTAINS 'Class' ORDER BY D ASC",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

		google.visualization.drawChart( {
			"containerId": "Felurian_0",
			"dataSourceUrl": SpreadsheetURL,
			"query":"SELECT D, F, G, H, I, J, K, L, M WHERE B CONTAINS 'Felurian' AND C CONTAINS '0' ORDER BY D ASC",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

		google.visualization.drawChart( {
			"containerId": "Felurian_1",
			"dataSourceUrl": SpreadsheetURL,
			"query":"SELECT D, F, G, H, I, J, K, L, M WHERE B CONTAINS 'Felurian' AND C CONTAINS '1' ORDER BY D ASC",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

		google.visualization.drawChart( {
			"containerId": "Felurian_2",
			"dataSourceUrl": SpreadsheetURL,
			"query":"SELECT D, F, G, H, I, J, K, L, M WHERE B CONTAINS 'Felurian' AND C CONTAINS '2' ORDER BY D ASC",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

		google.visualization.drawChart( {
			"containerId": "Felurian_3",
			"dataSourceUrl": SpreadsheetURL,
			"query":"SELECT D, F, G, H, I, J, K, L, M WHERE B CONTAINS 'Felurian' AND C CONTAINS '3' ORDER BY D ASC",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

		google.visualization.drawChart( {
			"containerId": "Felurian_4",
			"dataSourceUrl": SpreadsheetURL,
			"query":"SELECT D, F, G, H, I, J, K, L, M WHERE B CONTAINS 'Felurian' AND C CONTAINS '4' ORDER BY D ASC",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

		google.visualization.drawChart( {
			"containerId": "Felurian_5",
			"dataSourceUrl": SpreadsheetURL,
			"query":"SELECT D, F, G, H, I, J, K, L, M WHERE B CONTAINS 'Felurian' AND C CONTAINS '5' ORDER BY D ASC",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

		google.visualization.drawChart( {
			"containerId": "Felurian_6",
			"dataSourceUrl": SpreadsheetURL,
			"query":"SELECT D, F, G, H, I, J, K, L, M WHERE B CONTAINS 'Felurian' AND C CONTAINS '6' ORDER BY D ASC",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

		google.visualization.drawChart( {
			"containerId": "Felurian_7",
			"dataSourceUrl": SpreadsheetURL,
			"query":"SELECT D, F, G, H, I, J, K, L, M WHERE B CONTAINS 'Felurian' AND C CONTAINS '7' ORDER BY D ASC",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

		google.visualization.drawChart( {
			"containerId": "Felurian_8",
			"dataSourceUrl": SpreadsheetURL,
			"query":"SELECT D, F, G, H, I, J, K, L, M WHERE B CONTAINS 'Felurian' AND C CONTAINS '8' ORDER BY D ASC",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

		google.visualization.drawChart( {
			"containerId": "Felurian_9",
			"dataSourceUrl": SpreadsheetURL,
			"query":"SELECT D, F, G, H, I, J, K, L, M WHERE B CONTAINS 'Felurian' AND C CONTAINS '9' ORDER BY D ASC",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

	};


google.setOnLoadCallback(drawVisualization);

