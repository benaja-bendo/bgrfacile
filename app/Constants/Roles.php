<?php

namespace App\Constants;

class Roles
{

    /*
     * Utilisateur qui a tous les droits sur la plateforme.
     */
    public const SUPER_ADMIN = 'super_admin';

    /*
     * Utilisateur qui a des droits limités sur la plateforme.
     */
    public const ADMIN = 'admin';

    /*
     * Visiteur qui peut consulter les cours, les exercices et effectuer des recherches sur les établissements.
     */
    public const STUDENT = 'student';

    /*
     * Enseignant ayant le droit de créer des cours et de les gérer.
     */
    public const TEACHER = 'teacher';


    /* ----- ----- ---- ---- */

    public const ADMIN_SCHOOL = 'admin_school';

    /*
     * Parent ou tuteur légal, ayant des droits limités pour consulter les résultats scolaires de ses enfants.
     */
    public const PARENT_SCHOOL = 'parent_school';


    /*
 * Étudiant inscrit dans une école, avec des permissions limitées à celles d'un étudiant.
 */
    public const STUDENT_SCHOOL = 'student_school';

    /*
     * Utilisateur ayant des droits limités sur une école.
     */
    public const MANAGER_SCHOOL = 'manager_school';

    public const TEACHER_SCHOOL = 'teacher_school';


    public const ALL = [
        self::SUPER_ADMIN,
        self::ADMIN,
        self::STUDENT,
        self::TEACHER,
        self::ADMIN_SCHOOL,
        self::PARENT_SCHOOL,
        self::STUDENT_SCHOOL,
        self::MANAGER_SCHOOL,
        self::TEACHER_SCHOOL,
    ];
}

