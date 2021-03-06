<?php

namespace App\Models\Permission;

trait PermissionMethods
{
    public static function groups()
    {
        return \DB::table('permissions')->distinct()->get(['group']);
    }

    public static function permissionsByGroup($group)
    {
        return static::where('group' , $group)->orderBy('id' , 'asc')->get();
    }

    public static function permissionsArray()
    {
        $permissions = [
            /* Roles */
            [
                'group'  => 'Roles',
                'name'   => 'add_role',
                'label'  => 'Add Role',
            ],
            [
                'group'  => 'Roles',
                'name'   => 'edit_role',
                'label'  => 'Edit Role',
            ],
            [
                'group'  => 'Roles',
                'name'   => 'delete_role',
                'label'  => 'Delete Role',
            ],
            [
                'group'  => 'Roles',
                'name'   => 'view_role',
                'label'  => 'View Roles',
            ],

            /* Admins */
            [
                'group'  => 'Admins',
                'name'   => 'add_admin',
                'label'  => 'Add Admin',
            ],
            [
                'group'  => 'Admins',
                'name'   => 'edit_admin',
                'label'  => 'Edit Admin',
            ],
            [
                'group'  => 'Admins',
                'name'   => 'delete_admin',
                'label'  => 'Delete Admin',
            ],
            [
                'group'  => 'Admins',
                'name'   => 'view_admin',
                'label'  => 'View Admins',
            ],
            [
                'group'  => 'Admins',
                'name'   => 'activity_admin',
                'label'  => 'View Admins Activity',
            ],

            /* Users */
            [
                'group'  => 'Users',
                'name'   => 'add_user',
                'label'  => 'Add User',
            ],
            [
                'group'  => 'Users',
                'name'   => 'edit_user',
                'label'  => 'Edit User',
            ],
            [
                'group'  => 'Users',
                'name'   => 'delete_user',
                'label'  => 'Delete User',
            ],
            [
                'group'  => 'Users',
                'name'   => 'view_user',
                'label'  => 'View Users',
            ],
            [
                'group'  => 'Users',
                'name'   => 'view_user_attendance',
                'label'  => "View User's Attendance",
            ],

            [
                'group'  => 'Users',
                'name'   => 'view_user_note',
                'label'  => "View User's Spiritual note",
            ],

            /* Songs */
            [
                'group'  => 'Songs',
                'name'   => 'add_song',
                'label'  => 'Add Song',
            ],
            [
                'group'  => 'Songs',
                'name'   => 'edit_song',
                'label'  => 'Edit Song',
            ],
            [
                'group'  => 'Songs',
                'name'   => 'delete_song',
                'label'  => 'Delete Song',
            ],

            /* Albums */
            [
                'group'  => 'Albums',
                'name'   => 'add_album',
                'label'  => 'Add Album',
            ],
            [
                'group'  => 'Albums',
                'name'   => 'edit_album',
                'label'  => 'Edit Album',
            ],
            [
                'group'  => 'Albums',
                'name'   => 'delete_album',
                'label'  => 'Delete Album',
            ],

            /* Artists */
            [
                'group'  => 'Artists',
                'name'   => 'add_artist',
                'label'  => 'Add Artist',
            ],
            [
                'group'  => 'Artists',
                'name'   => 'edit_artist',
                'label'  => 'Edit Artist',
            ],
            [
                'group'  => 'Artists',
                'name'   => 'delete_artist',
                'label'  => 'Delete Artist',
            ],

        ];
        return $permissions;
    }
}