import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head} from '@inertiajs/react';
import {Box, Card, CardContent, Container, Stack, Typography} from "@mui/material";

export default function Index(props) {
    const {auth, countUsers} = props;

    return (<>
        <AuthenticatedLayout
            auth={auth}
        >
            <Head title="Statistiques"/>
            <Box
                component="main"
                sx={{
                    flexGrow: 1,
                    py: 8
                }}
            >
                <Container maxWidth="xl">
                    <Stack spacing={3}>
                        <Stack
                            direction="row"
                            justifyContent="space-between"
                            spacing={4}
                        >
                            <Typography
                                variant="h4"
                            >
                                Statistiques
                            </Typography>
                        </Stack>
                        <Card>
                            <CardContent>
                                <Stack
                                    direction="row"
                                    justifyContent="space-between"
                                    spacing={2}
                                >
                                    <Typography
                                        color="textSecondary"
                                        gutterBottom
                                        variant="h6"
                                    >
                                        Nombre d'utilisateurs
                                    </Typography>
                                    <Typography
                                        color="textPrimary"
                                        variant="h3"
                                    >
                                        {countUsers}
                                    </Typography>
                                </Stack>
                            </CardContent>
                        </Card>
                    </Stack>
                </Container>
            </Box>
        </AuthenticatedLayout>
    </>);
}
