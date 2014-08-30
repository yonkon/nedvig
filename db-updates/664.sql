ALTER TABLE opportunities   add column payment_object varchar(100)  NULL ;

UPDATE opportunities AS op SET payment_object = 
(
SELECT payment_object 
FROM sphr_object AS ob INNER JOIN sphr_objectpportunities_c AS ob_op ON ob.id = ob_op.sphr_objec388d_object_ida
WHERE ob_op.sphr_objecbc4aunities_idb = op.id AND ob.deleted = 0 AND ob_op.deleted = 0
) WHERE op.deleted = 0;