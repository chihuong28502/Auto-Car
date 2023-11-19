import { Box, Grid, Typography } from "@mui/material";
import Stack from "@mui/material/Stack";
import Button from "@mui/material/Button";

function Banner() {
  return (
    <Grid container>
      <Grid item xs={12}>
        <Box
          sx={{
            backgroundImage:
              "url(https://www.mercedes-benz.com.vn/content/vietnam/vi/passengercars/_jcr_content/root/responsivegrid/simple_stage_1564354.component.damq6.3367336852872.jpg/mercedes-benz-eqe-suv-x294-stage-3840x1707-10-2022.jpg)",
            backgroundSize: "cover",
            position: "relative",
            display: "flex",
            height: (theme) =>
              `calc(100vh - ${theme.trello.appBarHeight} - ${theme.trello.boardBarHeight})`,
            alignItems: "center",
            maxWidth: "100%",
          }}
        >
          <Box
            sx={{
              position: "absolute",
            }}
          >
            <Typography variant="h1" color="white">
              EQE SUV mới
            </Typography>
            <Typography variant="h5" color="white">
              Tự do vô hạn
            </Typography>
            <Stack spacing={2} direction="row">
              <Button variant="outlined" sx={{ borderColor: "#fff",color:'white' }}>
                LIÊN HỆ NHÀ PHÂN PHỐI
              </Button>
              <Button
                variant="contained"
                sx={{ backgroundColor: "palette.main" }}
              >
                Tìm Hiểu Thêm
              </Button>
            </Stack>
          </Box>
        </Box>
      </Grid>
    </Grid>
  );
}

export default Banner;
