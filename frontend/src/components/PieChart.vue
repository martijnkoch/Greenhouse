<script>
import { Pie } from "vue-chartjs";

export default {
  extends: Pie,
  mounted() {
    this.gradient = this.$refs.canvas
      .getContext("2d")
      .createLinearGradient(0, 0, 0, 450);
    this.gradient2 = this.$refs.canvas
      .getContext("2d")
      .createLinearGradient(0, 0, 0, 450);

    this.gradient.addColorStop(0, "rgba(88, 13, 137)" );
    this.gradient.addColorStop(0.5, "rgba(88, 13, 137)"); 
    this.gradient.addColorStop(1, "rgba(88, 13, 137)");

    this.gradient2.addColorStop(0, "rgba(39, 28, 66)");
    this.gradient2.addColorStop(0.5, "rgba(39, 28, 66)");
    this.gradient2.addColorStop(1, "rgba(39, 28, 66)");
    this.renderChart(
      {
        labels: ["Fifa", "CSGO", "Rocket League"],
        datasets: [
          {
            backgroundColor: [this.gradient, this.gradient2, "#00D8FF"],
            data: [40, 20, 10]
          }
        ]
      },
      { responsive: true, maintainAspectRatio: false }
    );
  }
};
</script>