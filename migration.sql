OrganizationRoleTable: create table "OrganizationRole" ("id" int identity primary key not null, "Title" nvarchar(255) not null, "email" nvarchar(255) not null, "password" nvarchar(255) not null, "created_at" datetime null, "updated_at" datetime null)
OrganizationRoleTable: create unique index "organizationrole_email_unique" on "OrganizationRole" ("email")
