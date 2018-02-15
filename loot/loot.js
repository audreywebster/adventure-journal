google.load('visualization', '1.0');  // Note: No need to specify chart libraries.
	var LootSpreadsheetURL = "https://spreadsheets.google.com/tq?tqx=out:html&key=1umTV_zZ1eb1sSjHi9igE75NfMiMKF6L89Gh2rqlwncw&gid=963244103";
	var GoldSpreadsheetURL = "https://spreadsheets.google.com/tq?tqx=out:html&key=1Uw0t77oFYAAqtt5tSkcQ5Rd0kAmOcObbnFB7gJqHz2A&gid=604014282";

	function drawVisualization() {

// LOOT
		google.visualization.drawChart( {
			"containerId": "Loot",
			"dataSourceUrl": LootSpreadsheetURL,
			"query":"SELECT B, C, D, E, F, G, H ORDER BY D",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

// GOLD
		google.visualization.drawChart( {
			"containerId": "Gold_gold",
			"dataSourceUrl": GoldSpreadsheetURL,
			"query":"SELECT sum(B) WHERE C = 'Gold'",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

// GEMS
		google.visualization.drawChart( {
			"containerId": "Gold_gems_sum",
			"dataSourceUrl": GoldSpreadsheetURL,
			"query":"SELECT sum(B) WHERE C != 'Gold'",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

		google.visualization.drawChart( {
			"containerId": "Gold_gems",
			"dataSourceUrl": GoldSpreadsheetURL,
			"query":"SELECT B, C WHERE C != 'Gold'",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

		google.visualization.drawChart( {
			"containerId": "Gold_cash_sums",
			"dataSourceUrl": GoldSpreadsheetURL,
			"query":"SELECT sum(B)",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});

		google.visualization.drawChart( {
			"containerId": "Gold_indiv",
			"dataSourceUrl": GoldSpreadsheetURL,
			"query":"SELECT sum(B) / 5",
			"refreshInterval": 60,
			"chartType": "Table",
			"options": {
				"alternatingRowStyle": false,
				"showRowNumber" : false
				}
		});


	};

google.setOnLoadCallback(drawVisualization);