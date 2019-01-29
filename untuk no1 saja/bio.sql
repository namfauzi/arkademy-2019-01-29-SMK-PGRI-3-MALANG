-- Adminer 4.6.3 PostgreSQL dump

DROP TABLE IF EXISTS "bio";
DROP SEQUENCE IF EXISTS bio_id_seq;
CREATE SEQUENCE bio_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 START 1 CACHE 1;

CREATE TABLE "public"."bio" (
    "id" integer DEFAULT nextval('bio_id_seq') NOT NULL,
    "nama" character varying NOT NULL,
    "address" text NOT NULL,
    "hobbies" character varying NOT NULL,
    "is_married" character varying NOT NULL,
    "school" character varying NOT NULL,
    "skill" character varying NOT NULL
) WITH (oids = false);

INSERT INTO "bio" ("id", "nama", "address", "hobbies", "is_married", "school", "skill") VALUES
(2,	'anam',	'malang',	'fishing, akses internet',	'Belum',	'SMK PGRI 3 MALANG',	'Programer');

-- 2019-01-29 15:35:34.031879+07
