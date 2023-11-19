import Box from "@mui/material/Box";
import Button from "@mui/material/Button";
import DriveEtaIcon from "@mui/icons-material/DriveEta";
import BookOnlineIcon from "@mui/icons-material/BookOnline";
import { Grid, TextField, Typography } from "@mui/material";
function BoardBar() {
  return (
    <Box
      sx={{
        paddingX: 5,
        backgroundColor: "palette.main",
        width: "100%",
        height: (theme) => theme.trello.boardBarHeight,
        display: "flex",
        alignItems: "center",
      }}
    >
      <Grid container>
        <Grid item xs={8}>
          <Box sx={{ display: "flex", gap: 8 }}>
            <Button
              sx={{
                display: "flex",
                alignItems: "center",
                gap: 0.5,
                paddingY: 1,
                "&:hover": { opacity: 0.7 },
              }}
              disabled={false}
              variant="elevated"
            >
              <DriveEtaIcon />
              <Typography>Các dòng xe</Typography>
            </Button>
            <Button
              sx={{
                display: "flex",
                alignItems: "center",
                gap: 0.5,
                paddingY: 1,
                "&:hover": { opacity: 0.7 },
              }}
              disabled={false}
              variant="elevated"
            >
              <BookOnlineIcon />
              <Typography>Mua trực tuyến</Typography>
            </Button>
            <Button
              sx={{
                display: "flex",
                alignItems: "center",
                gap: 0.5,
                paddingY: 1,
                "&:hover": { opacity: 0.7 },
              }}
              disabled={false}
              variant="elevated"
            >
              <Typography>Tư vấn mua xe</Typography>
            </Button>
            <Button
              sx={{
                display: "flex",
                alignItems: "center",
                gap: 0.5,
                paddingY: 1,
                "&:hover": { opacity: 0.7 },
              }}
              disabled={false}
              variant="elevated"
            >
              <Typography>Dịch vụ</Typography>
            </Button>
            <Button
              sx={{
                display: "flex",
                alignItems: "center",
                gap: 0.5,
                paddingY: 1,
                "&:hover": { opacity: 0.7 },
              }}
              disabled={false}
              variant="elevated"
            >
              <Typography>Thế giới Mercedes</Typography>
            </Button>
          </Box>
        </Grid>
        <Grid item xs={4}>
          <Box sx={{ display: "flex", justifyContent: "end" }}>
            <TextField
              id="outlined-search"
              label="Search..."
              size="small"
              type="search"
              sx={{ minWidth: "300px",paddingRight:2 }}
            />
          </Box>
        </Grid>
      </Grid>
    </Box>
  );
}

export default BoardBar;
