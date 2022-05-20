SELECT contacts.lastname, contacts.firstname, contacts.phone_number, contacts.email, companies.name
FROM contacts
INNER JOIN companies
ON contacts.id_company = companies.id_company
ORDER BY contacts.id_contact DESC;

SELECT invoices.facture_number, invoices.date, companies.name 
FROM invoices 
INNER JOIN companies 
ON invoices.id_company = companies.id_company 
ORDER BY invoices.date ASC;