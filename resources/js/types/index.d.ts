export interface User {
    id: number;
    name: string;
    email: string;
    email_verified_at?: string;
    profile_photo_url?: string;
    profile_photo_path?: string;
    role: UserRole;
}

export type UserRole = 'admin' | 'moderator' | 'user';

export type PageProps<
    T extends Record<string, unknown> = Record<string, unknown>,
> = T & {
    auth: {
        user: User;
    };
};
