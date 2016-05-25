$(function() {
    var t = {
		"trainer": {"ar": "\u0627\u0644\u0645\u062f\u0631\u0628"},
		"Scheduled Audit": {"ar": "\u062e\u0637\u0629 \u0627\u0644\u062a\u0641\u062a\u064a\u0634"},
		"Closure & Office Hearing": {"ar": "\u0627\u063a\u0644\u0627\u0642 \u0648 \u0645\u0631\u0627\u062c\u0639\u0629 \u0627\u0644\u0645\u0643\u062a\u0628"},
		"Your Reportees": {"ar": "\u0645\u0648\u0638\u0641\u064a\u0646 \u062a\u062d\u062a \u0627\u0634\u0631\u0627\u0641\u0643"},
		"Wardrobe with three Drawer": {"ar": "\u062e\u0632\u0627\u0646\u0629 \u0645\u0639 \u062b\u0644\u0627\u062b\u0629 \u0623\u062f\u0631\u0627\u062c"}, "disabled": {"ar": "\u0645\u0642\u0641\u0644"}, "Air Conditioner (New)": {"ar": "\u0645\u0643\u064a\u0641 \u0627\u0644\u0647\u0648\u0627\u0621 (\u0627\u0644\u062c\u062f\u064a\u062f)"}, "Present & trained": {"ar": "\u062d\u0627\u0636\u0631"}, "Add More Disposal": {"ar": "\u0627\u0636\u0627\u0641\u0629"}, "Not Conducted": {"ar": "\u0644\u0627\u064a\u0648\u062c\u062f"}, "Untrained Workers": {"ar": "\u0627\u0644\u0639\u0645\u0627\u0644 \u063a\u064a\u0631 \u0627\u0644\u0645\u062f\u0631\u0628\u064a\u0646"}, "Yealry Penalty Summary": {"ar": "\u0645\u0644\u062e\u0635 \u0627\u0644\u063a\u0631\u0627\u0645\u0627\u062a \u0627\u0644\u0633\u0646\u0648\u064a\u0629"}, "Positive": {"ar": "\u0627\u064a\u062c\u0627\u0628\u064a"}, "audit date": {"ar": "\u062a\u0627\u0631\u064a\u062e \u0627\u0644\u062a\u0641\u062a\u064a\u0634"}, "Audit Details": {"ar": "\u062a\u0641\u0627\u0635\u064a\u0644 \u0627\u0644\u062a\u0641\u062a\u064a\u0634"}, "Finish": {"ar": "\u0646\u0647\u0627\u064a\u0629"}, "House already occupied checkout first": {"ar": "\u0645\u0646\u0632\u0644 \u0627\u0644\u0645\u062d\u062a\u0644\u0629 \u0628\u0627\u0644\u0641\u0639\u0644 \u0627\u0644\u062e\u0631\u0648\u062c \u0623\u0648\u0644\u0627"}, "Before Discount": {"ar": "\u0642\u0628\u0644 \u0627\u0644\u062e\u0635\u0645"}, "Add More Samples": {"ar": "\u0627\u0636\u0627\u0641\u0629"}, "Buffet": {"ar": "\u0628\u0648\u0641\u064a\u0647"}, "Serial Number": {"ar": "\u0627\u0644\u0631\u0642\u0645 \u0627\u0644\u062a\u0633\u0644\u0633\u0644\u064a"}, "Fruit": {"ar": "\u0641\u0648\u0627\u0643\u0629"}, "Electronic Machines": {"ar": "\u0622\u0644\u0627\u062a \u0625\u0644\u0643\u062a\u0631\u0648\u0646\u064a\u0629"}, "Bathroom": {"ar": "\u062d\u0645\u0627\u0645"}, "Furniture": {"ar": "\u0627\u0644\u0627\u062b\u0627\u062b"}, "Small Fridge": {"ar": "\u0627\u0644\u062b\u0644\u0627\u062c\u0629 \u0627\u0644\u0635\u063a\u064a\u0631\u0629"}, "Tenant Details": {"ar": "\u062a\u0641\u0627\u0635\u064a\u0644 \u0627\u0644\u0645\u0633\u062a\u0623\u062c\u0631"}, "Schedule Trainings": {"ar": "\u062c\u062f\u0648\u0644 \u0627\u0644\u062f\u0648\u0631\u0627\u062a \u0627\u0644\u062a\u062f\u0631\u064a\u0628\u064a\u0629"}, "Rent for Investor": {"ar": "\u0627\u0644\u0627\u064a\u062c\u0627\u0631 \u0644\u0644\u0645\u0633\u062a\u062b\u0645\u0631"}, "Compliance": {"ar": "\u0627\u0644\u0627\u0645\u062a\u062b\u0627\u0644"}, "(based on Penalty Amounts)": {"ar": "(\u0639\u0644\u0649 \u0623\u0633\u0627\u0633 \u0627\u0644\u063a\u0631\u0627\u0645\u0627\u062a \u0627\u0644\u0645\u0627\u0644\u064a\u0629)"}, "timing": {"ar": "\u0627\u0644\u062a\u0648\u0642\u064a\u062a"}, "KG": {"ar": "\u0643\u062c"}, "Check in Date": {"ar": "\u062a\u062d\u0642\u0642 \u0641\u064a \u0627\u0644\u062a\u0633\u062c\u064a\u0644"}, "Inspectors": {"ar": "\u0627\u0644\u0645\u0641\u062a\u0634\u064a\u0646"}, "Sample Code": {"ar": "\u0631\u0642\u0645 \u0627\u0644\u0639\u064a\u0646\u0629"}, "(Based On Inspection Results By Severity)": {"ar": "(\u0628\u0646\u0627\u0621 \u0639\u0644\u0649 \u0641\u062d\u0635 \u0627\u0644\u0646\u062a\u0627\u0626\u062c \u062d\u0633\u0628 \u062f\u0631\u062c\u0629 \u0627\u0644\u062e\u0637\u0648\u0631\u0629)"}, "Identification Number": {"ar": "\u0631\u0642\u0645 \u0627\u0644\u0647\u0648\u064a\u0629"}, "Facilities": {"ar": "\u0627\u0644\u0645\u0631\u0641\u0642"}, "Warning": {"ar": "\u0627\u0646\u0630\u0627\u0631"}, "Yealry Penalty Graph": {"ar": "\u0627\u0644\u0631\u0633\u0645 \u0627\u0644\u0628\u064a\u0627\u0646\u064a \u0644\u0644\u063a\u0631\u0627\u0645\u0627\u062a \u0627\u0644\u0633\u0646\u0648\u064a\u0629"}, "Passport Number": {"ar": "\u0631\u0642\u0645 \u062c\u0648\u0627\u0632 \u0627\u0644\u0633\u0641\u0631"}, "Ready": {"ar": "\u062c\u0627\u0647\u0632"}, "Audits Disposal Approval": {"ar": "\u0627\u0644\u0645\u0648\u0627\u0641\u0642\u0629 \u0639\u0644\u0649 \u0645\u062d\u0627\u0636\u0631 \u0627\u0644\u0627\u062a\u0644\u0627\u0641"}, "Single Bed": {"ar": "\u0633\u0631\u064a\u0631 \u0645\u0641\u0631\u062f"}, "Constructed": {"ar": "\u0634\u064a\u062f\u062a"}, "Dining Chairs": {"ar": "\u0643\u0631\u0627\u0633\u064a \u0627\u0644\u0637\u0639\u0627\u0645"}, "Damaged": {"ar": "\u0627\u0644\u062a\u0627\u0644\u0641\u0629"}, "Attendance": {"ar": "\u0627\u0644\u062d\u0636\u0648\u0631"}, "attachments": {"ar": "\u0627\u0644\u0645\u0644\u0641\u0627\u062a \u0627\u0644\u0645\u0631\u0641\u0642\u0629"},  "Housing Tenants": {"ar": "\u0627\u0644\u0645\u0633\u062a\u0623\u062c\u0631\u064a\u0646 \u0627\u0644\u0625\u0633\u0643\u0627\u0646"}, "Vegetables": {"ar": "\u062e\u0636\u0631\u0648\u0627\u062a"}, "Satisfactory Compliance": {"ar": "\u0627\u0644\u0645\u0637\u0639\u0645 \u0628\u062d\u0627\u0644\u0629 \u062c\u064a\u062f\u0629 \u0645\u0646 \u0627\u0644\u0646\u0648\u0627\u062d\u064a \u0627\u0644\u0635\u062d\u064a\u0629"}, "Chilled": {"ar": "\u0645\u0628\u0631\u062f"}, "No Parent": {"ar": "\u0644\u0627 \u0627\u0644\u0631\u0626\u064a\u0633\u064a"}, "Edit profile": {"ar": "\u062a\u0639\u062f\u064a\u0644 \u0627\u0644\u0645\u0644\u0641 \u0627\u0644\u0634\u062e\u0635\u064a"}, "Housing Unit": {"ar": "\u0648\u062d\u062f\u0629 \u0627\u0644\u0625\u0633\u0643\u0627\u0646"}, "Clothes Dryer": {"ar": "\u0645\u062c\u0641\u0641 \u0627\u0644\u0645\u0644\u0627\u0628\u0633"}, "Test Type": {"ar": "\u0646\u0648\u0639 \u0627\u0644\u0641\u062d\u0635"}, "Passed": {"ar": "\u0627\u062c\u062a\u0627\u0632 \u0628\u0646\u062c\u0627\u062d"}, "Item": {"ar": "\u0628\u0646\u062f"}, "New": {"ar": "\u062c\u062f\u064a\u062f"}, "Environmental Health": {"ar": "\u0635\u062d\u0629 \u0627\u0644\u0628\u064a\u0626\u0629"}, "Cofee Table": {"ar": "\u0637\u0627\u0648\u0644\u0629 \u0627\u0644\u0642\u0647\u0648\u0629"}, "Meat": {"ar": "\u0644\u062d\u0648\u0645"}, "Liscence Expiry": {"ar": "\u0627\u0646\u062a\u0647\u0627\u0621 \u0627\u0644\u062a\u0631\u062e\u064a\u0635"}, "Picture": {"ar": "\u0635\u0648\u0631\u0629"}, "iqama no": {"ar": "\u0631\u0642\u0645 \u0627\u0644\u0627\u0642\u0627\u0645\u0629"}, "Enable": {"ar": "\u0641\u0639\u0627\u0644"}, "Cupboard fixed on wall": {"ar": "\u062e\u0632\u0627\u0646\u0629 \u062b\u0627\u0628\u062a\u0629 \u0639\u0644\u0649 \u0627\u0644\u062c\u062f\u0627\u0631"}, "Points Earned": {"ar": "\u062f\u0631\u062c\u0627\u062a \u0645\u062c\u0645\u0639\u0629"}, "Send email to client": {"ar": "\u0625\u0631\u0633\u0627\u0644 \u0628\u0631\u064a\u062f \u0625\u0644\u0643\u062a\u0631\u0648\u0646\u064a \u0625\u0644\u0649 \u0627\u0644\u0639\u0645\u064a\u0644"}, "After Discount": {"ar": "\u0628\u0639\u062f \u0627\u0644\u062e\u0635\u0645"}, "Family Contact Number": {"ar": "\u0627\u0644\u0623\u0633\u0631\u0629 \u0631\u0642\u0645 \u0627\u0644\u0627\u062a\u0635\u0627\u0644"}, "Disposal Information": {"ar": "\u062a\u0641\u0627\u0635\u064a\u0644 \u0627\u0644\u0627\u062a\u0644\u0627\u0641"}, "Clothes Washer": {"ar": "\u0627\u0644\u0645\u0644\u0627\u0628\u0633 \u063a\u0633\u0627\u0644\u0629"}, "Sofa 2 Sets": {"ar": "\u0623\u0631\u064a\u0643\u0629 2 \u0645\u062c\u0645\u0648\u0639\u0627\u062a"}, "Sofa 1 Set": {"ar": "\u0623\u0631\u064a\u0643\u0629 1 \u0645\u062c\u0645\u0648\u0639\u0629"}, "Dry": {"ar": "\u062c\u0627\u0641"}, "Sample Collection": {"ar": "\u062c\u0645\u0639 \u0627\u0644\u0639\u064a\u0646\u0627\u062a"}, "Bedside Table": {"ar": "\u0637\u0627\u0648\u0644\u0629 \u0633\u0631\u064a\u0631 \u062c\u0627\u0646\u0628\u064a\u0629"}, "training level": {"ar": "\u0645\u0633\u062a\u0648\u0649 \u0627\u0644\u062a\u062f\u0631\u064a\u0628"}, "schedule": {"ar": "\u062c\u062f\u0648\u0644 \u0627\u0644\u0645\u0648\u0627\u0639\u064a\u062f"}, "Items": {"ar": "\u0627\u0644\u0639\u0646\u0627\u0635\u0631"}, "High Compliance": {"ar": "\u0627\u0644\u0645\u0637\u0639\u0645 \u0628\u062d\u0627\u0644\u0629 \u0645\u0645\u062a\u0627\u0632\u0629 \u0645\u0646 \u0627\u0644\u0646\u0648\u0627\u062d\u064a \u0627\u0644\u0635\u062d\u064a\u0629"}, "Workers Waiting": {"ar": "\u0627\u0646\u062a\u0638\u0627\u0631"}, "Non Compliance": {"ar": "\u0639\u062f\u0645 \u0627\u0644\u0627\u0645\u062a\u062b\u0627\u0644"}, "Need Maintenance": {"ar": "\u062a\u062d\u062a\u0627\u062c \u0635\u064a\u0627\u0646\u0629"}, "Business Activity Severity": {"ar": "\u0627\u0644\u0646\u0634\u0627\u0637 \u0627\u0644\u062a\u062c\u0627\u0631\u064a"}, "Full Name": {"ar": "\u0627\u0644\u0627\u0633\u0645 \u0627\u0644\u0643\u0627\u0645\u0644"}, "Block": {"ar": "\u0645\u0641\u0644\u0642"}, "Study Desk": {"ar": "\u0645\u0643\u062a\u0628 \u0627\u0644\u062f\u0631\u0627\u0633\u0629"}, "Computed": {"ar": "\u0645\u062d\u0633\u0648\u0628"}, "language": {"ar": "\u0627\u0644\u0644\u063a\u0629"}, "Compliance Vs Non-Compliance": {"ar": "\u0627\u0644\u0627\u0645\u062a\u062b\u0627\u0644 \u0648 \u0639\u062f\u0645 \u0627\u0644\u0627\u0645\u062a\u062b\u0627\u0644"}, "Grade": {"ar": "\u0627\u0644\u062a\u0635\u0646\u064a\u0641"}, "Existing Files": {"ar": "\u0627\u0644\u0645\u0644\u0641\u0627\u062a \u0627\u0644\u0645\u0648\u062c\u0648\u062f\u0629"}, "Complete Address": {"ar": "\u0627\u0644\u0639\u0646\u0648\u0627\u0646 \u0627\u0644\u0643\u0627\u0645\u0644"}, "Fees Charged": {"ar": "\u0627\u0644\u0631\u0633\u0648\u0645"}, "Result": {"ar": "\u0627\u0644\u0646\u062a\u064a\u062c\u0629"}, "Mirror": {"ar": "\u0645\u0631\u0622\u0629"}, "Fail": {"ar": "\u063a\u064a\u0631 \u0645\u062a\u0642\u064a\u062f \u0628\u0627\u0644\u0627\u0634\u062a\u0631\u0627\u0637\u0627\u062a \u0627\u0644\u0635\u062d\u064a\u0629 \u0648\u0647\u0648 \u0628\u062d\u0627\u0644\u0629 \u063a\u064a\u0631 \u0645\u0642\u0628\u0648\u0644\u0629 \u0645\u0646 \u0627\u0644\u0646\u0627\u062d\u064a\u0629 \u0627\u0644\u0635\u062d\u064a\u0629 "}, "Food Table": {"ar": "\u0627\u0644\u062c\u062f\u0648\u0644 \u0627\u0644\u0637\u0639\u0627\u0645"}, "Expiring This Month": {"ar": "\u062a\u0646\u062a\u0647\u064a \u0647\u0630\u0627 \u0627\u0644\u0634\u0647\u0631"}, "Blocked": {"ar": "\u0645\u063a\u0644\u0642"}, "Worker Name": {"ar": "\u0627\u0633\u0645 \u0627\u0644\u0639\u0627\u0645\u0644"}, "Item Description (Leave blank to ignore)": {"ar": "\u062a\u0641\u0627\u0635\u064a\u0644 \u0627\u0644\u0645\u0646\u062a\u062c"}, "Litre": {"ar": "\u0644\u062a\u0631"}, "Damaged House": {"ar": "\u0627\u0644\u0628\u064a\u062a \u0645\u062a\u0636\u0631\u0631"}, "Update Centre": {"ar": "\u062a\u062d\u062f\u064a\u062b \u0627\u0644\u0645\u0631\u0643\u0632 \u0627\u0644\u062a\u062c\u0627\u0631\u064a"}, "Fridge with Freezer": {"ar": "\u062b\u0644\u0627\u062c\u0629 \u0645\u0639 \u0641\u0631\u064a\u0632\u0631"}, "Create New Item": {"ar": "\u0625\u0646\u0634\u0627\u0621 \u0639\u0646\u0635\u0631 \u062c\u062f\u064a\u062f"}, "Paint": {"ar": "\u0631\u0633\u0645"}, "Dairy": {"ar": "\u0627\u0644\u0628\u0627\u0646/\u0645\u0634\u062a\u0642\u0627\u062a\u0647\u0627"}, "Finish & Print": {"ar": "\u0625\u0646\u0647\u0627\u0621 \u0648\u0637\u0628\u0627\u0639\u0629"}, "expiring this month": {"ar": "\u062a\u0646\u062a\u0647\u064a \u0647\u0630\u0627 \u0627\u0644\u0634\u0647\u0631"}, "select": {"ar": "\u0627\u062e\u062a\u064a\u0627\u0631"}, "Need Improvement": {"ar": "\u0627\u0644\u0645\u0637\u0639\u0645 \u0628\u062d\u0627\u0644\u0629 \u0645\u0642\u0628\u0648\u0644\u0629 \u0645\u0646 \u0627\u0644\u0646\u0648\u0627\u062d\u064a \u0627\u0644\u0635\u062d\u064a\u0629"}, "Wardrobe with five Drawer": {"ar": "\u062e\u0632\u0627\u0646\u0629 \u0645\u0639 \u062e\u0645\u0633\u0629 \u062f\u0631\u062c"}, "Juicer Machine": {"ar": "\u0622\u0644\u0629 \u0639\u0635\u0627\u0631\u0629"}, "Warning & Office Hearing": {"ar": "\u0627\u0646\u0630\u0627\u0631 \u0648 \u0645\u0631\u0627\u062c\u0639\u0629 \u0627\u0644\u0645\u0643\u062a\u0628"}, "launch now": {"ar": "\u0627\u0628\u062f\u0623 \u0627\u0644\u0622\u0646"}, "Select an activity": {"ar": "\u062d\u062f\u062f \u0646\u0648\u0639 \u0627\u0644\u0646\u0634\u0627\u0637"}, "Good Condition": {"ar": "\u0628\u062d\u0627\u0644\u0629 \u062c\u064a\u062f\u0629"}, "Sample Name (Leave Blank to Ignore)": {"ar": "\u0627\u0633\u0645 \u0627\u0644\u0639\u064a\u0646\u0629"}, "Active": {"ar": "\u0641\u0639\u0627\u0644"}, "Create": {"ar": "\u062e\u0644\u0642"}, "Pending your approval": {"ar": "\u0641\u064a \u0627\u0646\u062a\u0638\u0627\u0631 \u0645\u0648\u0627\u0641\u0642\u062a\u0643"}, "Workers Trained": {"ar": "\u0645\u062a\u062f\u0631\u0628"}, "username": {"ar": "\u0627\u0633\u0645 \u0627\u0644\u0645\u0633\u062a\u062e\u062f\u0645"}, "TV Table": {"ar": "\u0627\u0644\u062c\u062f\u0648\u0644 \u0627\u0644\u062a\u0644\u0641\u0632\u064a\u0648\u0646"}, "enable": {"ar": "\u062a\u0641\u0639\u064a\u0644"}, "Fridge 2 doors with freezer": {"ar": "\u0627\u0644\u062b\u0644\u0627\u062c\u0629 2 \u0627\u0644\u0623\u0628\u0648\u0627\u0628 \u0645\u0639 \u0627\u0644\u0645\u062c\u0645\u062f"}, "Big Cupboard Books": {"ar": "\u0643\u0628\u064a\u0631 \u062f\u0648\u0644\u0627\u0628 \u0643\u062a\u0628"}, "Language": {"ar": "\u0627\u0644\u0644\u063a\u0629"}, "Violations Only": {"ar": "\u0627\u0644\u0645\u062e\u0627\u0644\u0641\u0627\u062a \u0641\u0642\u0637"}, "Less than": {"ar": "\u0627\u0642\u0644 \u0645\u0646"}, "Negative": {"ar": "\u0633\u0644\u0628\u064a"}, "Your reportees": {"ar": "\u0645\u0648\u0638\u0641\u064a\u0646 \u062a\u062d\u062a \u0627\u0634\u0631\u0627\u0641\u0643"}, "Under Maintenance": {"ar": "\u062a\u062d\u062a \u0627\u0644\u0635\u064a\u0627\u0646\u0629"}, "Quantity": {"ar": "\u0643\u0645\u064a\u0629"}, "Repair": {"ar": "\u064a\u0635\u0644\u062d"}, "not issued": {"ar": "\u0644\u0645 \u062a\u0635\u062f\u0631 \u0628\u0639\u062f"}, "Office Hearing": {"ar": "\u0645\u0631\u0627\u062c\u0639\u0629 "}, "Family": {"ar": "\u0623\u0633\u0631\u0629"}, "course number": {"ar": "\u0631\u0642\u0645 \u0627\u0644\u062f\u0648\u0631\u0629"}, "Training Details": {"ar": "\u062a\u0641\u0627\u0635\u064a\u0644 \u0627\u0644\u062a\u062f\u0631\u064a\u0628"}, "Audits Penalty Approval": {"ar": "\u0627\u0644\u0645\u0648\u0627\u0641\u0642\u0629 \u0639\u0644\u0649 \u0627\u0644\u063a\u0631\u0627\u0645\u0627\u062a \u0627\u0644\u0645\u0627\u0644\u064a\u0629"}, "General": {"ar": "\u0639\u0627\u0645"}, "Electric Stove": {"ar": "\u0641\u0631\u0646 \u0643\u0647\u0631\u0628\u0627\u0626\u064a"}, "Item Details": {"ar": "\u062a\u0641\u0627\u0635\u064a\u0644 \u0627\u0644\u0628\u0646\u062f"}, "Appliances": {"ar": "\u0627\u0644\u0623\u062c\u0647\u0632\u0629"}, "spoiled": {"ar": "\u0639\u0644\u0627\u0645\u0627\u062a \u0641\u0633\u0627\u062f"}, "Hairstyles": {"ar": "\u062a\u0633\u0631\u064a\u062d\u0627\u062a \u0627\u0644\u0634\u0639\u0631"}, "Unit": {"ar": "\u0627\u0644\u0648\u062d\u062f\u0629"}, "delete": {"ar": "\u062d\u0630\u0641"}, "Closure": {"ar": "\u0627\u063a\u0644\u0627\u0642"}, "Replacement": {"ar": "\u0628\u062f\u064a\u0644"}, "Candy ": {"ar": "\u062d\u0644\u0648\u064a\u0627\u062a"}, "Disposal": {"ar": "\u0645\u062d\u0636\u0631 \u0627\u062a\u0644\u0627\u0641"}, "Without Images": {"ar": "\u0628\u062f\u0648\u0646 \u0635\u0648\u0631"}, "With Images": {"ar": "\u0645\u0639 \u0627\u0644\u0635\u0648\u0631"}, "Submit": {"ar": "\u0639\u0631\u0636"}, "Other": {"ar": "\u0627\u062e\u0631\u0649"}, "Suspension": {"ar": "\u062a\u0639\u0644\u064a\u0642 \u0627\u0644\u062a\u0631\u062e\u064a\u0635"}, "Checkout": {"ar": "\u0627\u0644\u062f\u0641\u0639"}, "Price Range": {"ar": "\u0646\u0637\u0627\u0642 \u0627\u0644\u0633\u0639\u0631"}, "Site Ranking": {"ar": "\u062f\u0631\u062c\u0629 \u0627\u0644\u062a\u0635\u0646\u064a\u0641"}, "Sofa 3 Sets": {"ar": "\u0623\u0631\u064a\u0643\u0629 3 \u0645\u062c\u0645\u0648\u0639\u0627\u062a"}, "Sofa Set 3 Pieces": {"ar": "\u0645\u062c\u0645\u0648\u0639\u0629 \u0623\u0631\u064a\u0643\u0629 3 \u0642\u0637\u0639"}, "Double Mattress": {"ar": "\u0636\u0639\u0641 \u0645\u0641\u0631\u0634"}, "Add worker": {"ar": "\u0625\u0636\u0627\u0641\u0629 \u0639\u0627\u0645\u0644"}, "Double Bed": {"ar": "\u0633\u0631\u064a\u0631 \u0645\u0632\u062f\u0648\u062c"}, "Electric Stove - Microwave": {"ar": "\u0645\u0648\u0642\u062f \u0643\u0647\u0631\u0628\u0627\u0626\u064a - \u0645\u064a\u0643\u0631\u0648\u0648\u064a\u0641"}, "Disable": {"ar": "\u0645\u063a\u0644\u0642"}, "Dish Washer": {"ar": "\u063a\u0633\u0627\u0644\u0629 \u0623\u0637\u0628\u0627\u0642"}, "Expired": {"ar": "\u0645\u0646\u062a\u0647\u064a \u0627\u0644\u0635\u0644\u0627\u062d\u064a\u0629"}, "Audit ID": {"ar": "\u0631\u0642\u0645 \u0627\u0644\u062a\u0642\u0631\u064a\u0631"}, "Username": {"ar": "\u0627\u0633\u0645 \u0627\u0644\u0645\u0633\u062a\u062e\u062f\u0645"}, "Absent": {"ar": "\u063a\u0627\u0626\u0628"}, "Mobile Number": {"ar": "\u0631\u0642\u0645 \u0627\u0644\u0647\u0627\u062a\u0641 \u0627\u0644\u0645\u062d\u0645\u0648\u0644"}, "Check In History": {"ar": "\u062a\u0627\u0631\u064a\u062e \u0627\u0644\u0625\u064a\u062f\u0627\u0639"}, "Training Level": {"ar": "\u0645\u0633\u062a\u0648\u0649 \u0627\u0644\u062a\u062f\u0631\u064a\u0628"}, "Bio Graph": {"ar": "\u0627\u0644\u0633\u064a\u0631\u0629 \u0627\u0644\u0630\u0627\u062a\u064a\u0629"}, "Frozen": {"ar": "\u0645\u062c\u0645\u062f"}, "Violations Reported By Inspectors": {"ar": "\u0627\u0644\u0645\u062e\u0627\u0644\u0641\u0627\u062a \u0628\u0627\u0644\u0645\u0641\u062a\u0634\u064a\u0646"}, "Single Mattress": {"ar": "\u0641\u0631\u0627\u0634 \u0648\u0627\u062d\u062f"}, "Penalty Reported By Inspectors": {"ar": "\u0627\u0644\u063a\u0631\u0627\u0645\u0627\u062a \u0628\u0644\u0645\u0641\u062a\u0634\u064a\u0646"}, "Remove": {"ar": "\u0627\u0632\u0627\u0644\u0629"}, "Suspension & Office Hearing": {"ar": "\u062a\u0639\u0644\u064a\u0642 \u0627\u0644\u062a\u0631\u062e\u064a\u0635 \u0648\u0645\u0631\u0627\u062c\u0639\u0629 \u0627\u0644\u0645\u0643\u062a\u0628"}, "disable": {"ar": "\u0645\u0642\u0641\u0644"}, "remarks": {"ar": "\u0645\u0644\u0627\u062d\u0638\u0627\u062a"}, "Fresh": {"ar": "\u0637\u0627\u0632\u062c"}, "Corner Table": {"ar": "\u0632\u0627\u0648\u064a\u0629 \u0627\u0644\u062c\u062f\u0648\u0644"}, "Tenants": {"ar": "\u0627\u0644\u0645\u0633\u062a\u0623\u062c\u0631\u064a\u0646"}, "Cupboard wardrobe and shelves": {"ar": "\u062e\u0632\u0627\u0646\u0629 \u062e\u0632\u0627\u0646\u0629 \u0648\u0631\u0641\u0648\u0641"}, "Old Airconditioner": {"ar": "\u0645\u0643\u064a\u0641\u0627\u062a \u0642\u062f\u064a\u0645"}, "Never Issued": {"ar": "\u0644\u0645 \u062a\u0635\u062f\u0631 \u0628\u0639\u062f"}, "Single": {"ar": "\u0648\u062d\u064a\u062f"}, "Trust": {"ar": "\u062b\u0642\u0629"}, "Quality": {"ar": "\u062c\u0648\u062f\u0629"}, "Class id": {"ar": "\u0627\u0644\u0631\u0642\u0645"},
		"Dashboard": {"ar": "\u0625\u062D\u0635\u0627\u0626\u064A\u0627\u062A"},
		"Facility": {"ar": "\u0627\u0644\u0645\u0648\u0627\u0642\u0639"},
		"Create New" : {"ar": "\u0625\u062F\u062E\u0627\u0644 \u062C\u062F\u064A\u062F"},
		"View All": {"ar": "\u0645\u0634\u0627\u0647\u062F\u0629 \u0627\u0644\u0643\u0644"},
		"Commercial Centres": {"ar": "\u0627\u0644\u0645\u0631\u0627\u0643\u0632 \u0627\u0644\u062A\u062C\u0627\u0631\u064A\u0629"},
		"Workers": {"ar": "\u0627\u0644\u0639\u0645\u0627\u0644"},
		"Penalties": {"ar": "\u063A\u0631\u0627\u0645\u0629"},
		"Category": {"ar": "\u0627\u0644\u0641\u0626\u0629"},
		"Checklist": {"ar": "\u0627\u0644\u0645\u0631\u062C\u0639\u064A\u0629"},
		"Audits": {"ar": "\u0627\u0644\u062A\u062F\u0642\u064A\u0642"},
		"Schedule Audit": {"ar": "\u062E\u0637\u0629 \u0627\u0644\u062A\u062F\u0642\u064A\u0642"},
		"Auto Schedule": {"ar": "\u062C\u062F\u0648\u0644\u0629 \u062A\u062F\u0642\u064A\u0642"},
		"Graphs": {"ar": "\u0631\u0633\u0648\u0645 \u0628\u064A\u0627\u0646\u064A\u0629"},
		"Training": {"ar": "\u0627\u0644\u062A\u062F\u0631\u064A\u0628"},
		"Schedule Training": {"ar": "\u062C\u062F\u0648\u0644 \u0627\u0644\u062F\u0648\u0631\u0627\u062A \u0627\u0644\u062A\u062F\u0631\u064A\u0628\u064A\u0629"},
		"Log out": {"ar": "\u062E\u0631\u0648\u062C"},

		"Violations Summary (Based on Inspection Results by Severity)": {"ar": "\u0645\u0644\u062E\u0635 \u0627\u0644\u0645\u062E\u0627\u0644\u0641\u0627\u062A (\u0639\u0644\u0649 \u0623\u0633\u0627\u0633 \u0627\u0644\u063A\u0631\u0627\u0645\u0627\u062A \u0627\u0644\u0645\u0627\u0644\u064A\u0629)"},
		"VIOLATIONS SUMMARY (BASED ON PENALTY AMOUNTS)": {"ar": "\u062E\u0631\u0648\u062C"},
		"Overall": {"ar": "\u0639\u0645\u0648\u0645\u0627\u064E"},
		"Environmental & Health Inspections": {"ar": "\u0635\u062D\u0629 \u0627\u0644\u0628\u0626\u0629"},
		"Market Control Inspections": {"ar": "\u0627\u0644\u062A\u0641\u062A\u064A\u0634 \u0627\u0644\u0623\u0633\u0648\u0627\u0642"},
		"License Status graph": {"ar": "\u0635\u062D\u0629 \u0627\u0644\u0628\u0626\u0629"},

		"High": {"ar": "\u0639\u0627\u0644\u064A"},
		"Low": {"ar": "\u0645\u0646\u062E\u0641\u0636"},
		"Medium": {"ar": "\u0645\u062A\u0648\u0633\u0637"},

		"Email": {"ar": "\u0627\u0644\u0628\u0631\u064A\u062F \u0627\u0644\u0625\u0644\u0643\u062A\u0631\u0648\u0646\u064A"},
		"Employee Level": {"ar": "\u0631\u062A\u0628\u0629 \u0627\u0644\u0645\u0648\u0638\u0641"},
		"Name": {"ar": "\u0627\u0644\u0625\u0633\u0645"},
		"Id": {"ar": "\u0631\u0642\u0645"},
		"Actions": {"ar": "\u0642\u0631\u0627\u0631"},
		"View": {"ar": "\u0639\u0631\u0636"},
		"Edit": {"ar": "\u062A\u0639\u062F\u064A\u0644"},
		"EMPLOYEES": {"ar": "\u0627\u0644\u0645\u0648\u0638\u0641\u064A\u0646"},
    };

    var language = checkCookie("lang_persist");
    console.log("Language Cookie: "+ language);
    var sel = "";
    if (language == "") {
    	sel = "en";
	    console.log("sel: "+ sel);
		$(".lang-selector").html('<i class="mdi-action-language"></i> العربية');
		$(".lang-selector").attr("data-value","ar");
    }
    else {
    	sel = language;
	    console.log("sel in else: "+ sel);
    	if ( sel == "en" ){
			$(".lang-selector").html('<i class="mdi-action-language"></i> العربية');
			$(".lang-selector").attr("data-value","ar");
		} else {
			$(".lang-selector").html("<i class='mdi-action-language'></i> English");
			$(".lang-selector").attr("data-value","en");
		}
    }

	setCookie("lang_persist", sel);

	var _t = $('body').translate({lang: sel, t: t});

	var str = _t.g("translate");
	console.log(str);


	$(".lang-selector").click(function(ev) {
		var lang = $(this).attr("data-value");
		_t.lang(lang);

		console.log(lang);
		ev.preventDefault();

		if ( lang == "en" ){
			$(this).html('<i class="mdi-action-language"></i> العربية');
			$(this).attr("data-value","ar");
		} else {
			$(this).html("<i class='mdi-action-language'></i> English");
			$(this).attr("data-value","en");
		}
		setCookie("lang_persist", lang, 30);

	});


});


function setCookie(cname,cvalue) {
    document.cookie = cname+"="+cvalue+"; path=/audit/index.php/;";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie(cname) {
    var lang_persist=getCookie(cname);
    if (lang_persist != "") {
       return lang_persist;
    } else {
       return "";
    }
}