import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head} from '@inertiajs/react';
import {useCallback, useMemo, useState} from 'react';
import ArrowDownOnSquareIcon from '@heroicons/react/24/solid/ArrowDownOnSquareIcon';
import ArrowUpOnSquareIcon from '@heroicons/react/24/solid/ArrowUpOnSquareIcon';
import PlusIcon from '@heroicons/react/24/solid/PlusIcon';
import {Box, Button, Container, Stack, SvgIcon, Typography} from '@mui/material';
import {useSelection} from '@/hooks/use-selection';
import {CustomersTable} from '@/sections/user/customers-table.jsx';
import {CustomersSearch} from '@/sections/user/customers-search.jsx';
import {applyPagination} from '@/Utils/apply-pagination';


const useCustomerIds = (customers) => {
    return useMemo(() => {
        return customers.map((customer) => customer.id);
    }, [customers]);
};

export default function Index(props) {
    const {users: {data}} = props;
    const [page, setPage] = useState(0);
    const [rowsPerPage, setRowsPerPage] = useState(5);
    const customers = useCustomers(page, rowsPerPage);
    const customersIds = useCustomerIds(customers);
    const customersSelection = useSelection(customersIds);

    function useCustomers(page, rowsPerPage) {
        return useMemo(() => {
            return applyPagination(data, page, rowsPerPage);
        }, [page, rowsPerPage]);
    }

    const handlePageChange = useCallback((event, value) => {
        setPage(value);
    }, []);

    const handleRowsPerPageChange = useCallback((event) => {
        setRowsPerPage(event.target.value);
    }, []);

    return (<>
        <AuthenticatedLayout
        >
            <Head title="Liste des utilisateurs"/>
            <Box
                component="main"
                sx={{
                    flexGrow: 1, py: 8
                }}
            >
                <Container maxWidth="xl">
                    <Stack spacing={3}>
                        <Stack
                            direction="row"
                            justifyContent="space-between"
                            spacing={4}
                        >
                            <Stack spacing={1}>
                                <Typography variant="h4">
                                    Liste des utilisateurs
                                </Typography>
                                <Stack
                                    alignItems="center"
                                    direction="row"
                                    spacing={1}
                                >
                                    <Button
                                        color="inherit"
                                        startIcon={(<SvgIcon fontSize="small">
                                            <ArrowUpOnSquareIcon/>
                                        </SvgIcon>)}
                                    >
                                        Import
                                    </Button>
                                    <Button
                                        color="inherit"
                                        startIcon={(<SvgIcon fontSize="small">
                                            <ArrowDownOnSquareIcon/>
                                        </SvgIcon>)}
                                    >
                                        Export
                                    </Button>
                                </Stack>
                            </Stack>
                            <div>
                                <Button
                                    startIcon={(<SvgIcon fontSize="small">
                                        <PlusIcon/>
                                    </SvgIcon>)}
                                    variant="contained"
                                >
                                    Nouveau
                                </Button>
                            </div>
                        </Stack>
                        <CustomersSearch/>
                        <CustomersTable
                            count={data.length}
                            items={customers}
                            onDeselectAll={customersSelection.handleDeselectAll}
                            onDeselectOne={customersSelection.handleDeselectOne}
                            onPageChange={handlePageChange}
                            onRowsPerPageChange={handleRowsPerPageChange}
                            onSelectAll={customersSelection.handleSelectAll}
                            onSelectOne={customersSelection.handleSelectOne}
                            page={page}
                            rowsPerPage={rowsPerPage}
                            selected={customersSelection.selected}
                        />
                    </Stack>
                </Container>
            </Box>
        </AuthenticatedLayout>
    </>);
}
