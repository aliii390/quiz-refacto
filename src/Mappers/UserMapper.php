

<?php


class UserMapper implements MapperContract {
        public static function mapToObject(array $loginData):User
        {
            return new User(
                $loginData['id'],
                $loginData['username'],
            );
        }
}
