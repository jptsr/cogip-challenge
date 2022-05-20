SELECT contacts.lastname, contacts.firstname, contacts.phone_number, contacts.email, companies.name
FROM contacts
INNER JOIN companies
ON contacts.id_company = companies.id_company
ORDER BY contacts.id_contact DESC;