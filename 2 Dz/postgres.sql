-- 1)
SELECT * FROM users;
-- 2)
SELECT
    o.id,
    o.name AS order_name,
    o.amount,
    u.name AS client_name,
    u.email
FROM orders o
JOIN users u ON o.user_id = u.id
WHERE u.name LIKE 'Иванов%'
ORDER BY o.created_at DESC;
-- 3)
SELECT DISTINCT
    u.id,
    u.name
FROM users u
JOIN orders o ON u.id = o.user_id;
-- 4)
SELECT
    u.id AS user_id,
    u.name AS user_name,
    u.email,
    o.id AS order_id,
    o.name AS order_name,
    o.amount,
    o.created_at AS order_date
FROM orders o
JOIN users u ON o.user_id = u.id
ORDER BY o.created_at DESC
LIMIT 1;
-- 5)
SELECT 
    o.id AS order_id,
    o.name AS order_name,
    o.amount,
    u.name AS client_name,
    o.created_at AS order_date
FROM orders o
JOIN users u ON o.user_id = u.id
WHERE o.created_at <= '2023-03-31 23:59:59'
ORDER BY o.created_at DESC;