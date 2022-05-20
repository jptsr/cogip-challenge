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

SELECT companies.name, companies.country, companies.VAT, company_type.type 
FROM companies
INNER JOIN company_type 
ON companies.id_type = company_type.id_type
ORDER BY companies.id_company DESC;